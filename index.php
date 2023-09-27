<?php
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_db_con.php';
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($email)) {
        header("Location: index.html?error=User Name is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.html?error=Password is required");
        exit();
    } else {
        $sql = "select * from registration_user where email = '$email' AND password = '$password' AND id";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            $login = true;
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] == $email && $row['password'] == $password) {
                session_start();
                $_SESSION['usr_loggedin'] = true;
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $exist_id = $_SESSION['id'];
                // if exam already done
                $exist_usr = "SELECT student_id FROM `answer` where student_id = '" . $exist_id . "' ";
                $sql = mysqli_query($conn, $exist_usr);
                $num_existROws = mysqli_num_rows($sql);
                if ($num_existROws > 0) {
                    header("location: result.php");
                } else {
                    header("location: page1.php");
                }
            }
        } else {
            $showError = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Online Stress Survey</title>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/logo/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/logo/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/logo/favicon/site.webmanifest">
    <link rel="mask-icon" href="images/logo/favicon/safari-pinned-tab.svg" color="#9a14e7">
    <meta name="msapplication-TileColor" content="#9f00a7">
    <meta name="theme-color" content="#ffffff">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@400;700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- <link rel="stylesheet" href="css/login.css"> -->

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="home" class="body">
    <div class="container-fluid d-flex justify-content-center">
        <div class="container border">
            <form class="login-form" action="index.php" method="post">
                <h1>Login</h1>
                <div class="form-group">
                    <input type="email" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                </div>
                <div class="form-group">
                    <input type="password" id="exampleInputPassword1" name="password" placeholder="Password" required>
                </div>

                <?php
                if ($showError) {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Invaid Credentials </strong> Please check email and password.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                }
                ?>
                <div class="d-flex justify-content-between pb-1">
                    <a class="page-link" href="signup.php">Signup</a>
                    <button type="submit" class="page-link">Login</button>
                </div>
            </form>
        </div>
    </div>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>