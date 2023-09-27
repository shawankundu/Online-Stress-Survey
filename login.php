<?php
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
        // Exam already done
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
      $message = "Please check email and password.";
    }
  }
}
?>
<script>
  alert("<?php echo $message; ?>");
  window.location.href = "index.html";
</script>