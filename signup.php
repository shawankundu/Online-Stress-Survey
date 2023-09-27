<?php
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include '_db_con.php';
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];
    $class = $_POST['class'];
    $gender = $_POST['gender'];

    $exist_usrslq = "SELECT * FROM `registration_user` WHERE email = '$email'";
    $result = mysqli_query($conn, $exist_usrslq);
    $num_existROws = mysqli_num_rows($result);
    if ($num_existROws > 0) {
        $showError = "User already exists!";
    } else {
        $stmt = $conn->prepare("insert into registration_user(name, email, password, age, class, gender) values(?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssiis", $name, $email, $password, $age, $class, $gender);
        $execval = $stmt->execute();
        $stmt->close();
        $conn->close();
        header("location: index.html");
    }
}
?>
<script>
    alert("<?php echo $message; ?>");
    window.location.href = "index.html";
</script>

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/main.css">

</head>

<body id="home" class="body">
    <div class="container-fluid d-flex justify-content-center">
        <div class="container border">
            <form class="signup-form" action="signup.php" method="post">
                <h1>Signup</h1>
                <div class="form-group">
                    <input type="text" placeholder="Name" name="name" autocomplete="nope" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email" name="email" autocomplete="nope" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" autocomplete="new-password" required>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <input type="number" placeholder="Age" name="age" autocomplete="age" required>
                    <input type="number" placeholder="class" name="class" autocomplete="class" required>
                </div>

                <div class="gender d-flex justify-content-start">
                    <div class="">Gender</div>
                    <div class="form-check">
                        <input class="form-check-input-g" type="radio" name="gender" id="gridRadios1" value="male">
                        <label class="form-check-label-g" for="gridRadios1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input-g" type="radio" name="gender" id="gridRadios2" value="female">
                        <label class="form-check-label-g" for="gridRadios2">
                            Female
                        </label>
                    </div>
                </div>


                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="close" style="" data-dismis="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Error!</strong> ' . $showError . '.
                </div>



                <div class="d-flex justify-content-between py-4">
                    <a class="page-link" href="index.html">Signin</a>
                    <button type="submit" class="page-link">Register</button>
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