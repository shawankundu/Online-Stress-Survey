<?php
// $login = false;
// $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $conn = new mysqli('localhost','root','','test_db');
  $id = $_POST["id"];
  $usremail = $_POST["usr_email"];
  $usrpassword = $_POST["usr_password"];
  if (empty($usremail)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($usrpassword)){
        header("Location: index.php?error=Password is required");
	    exit();
  }
  else{
      $sql = "select * from registration_user where email = '$usremail' AND password = '$usrpassword'";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1){
            $login = true;
            $row = mysqli_fetch_assoc($result);
            if($row['email'] == $usremail && $row['password'] == $usrpassword){
              session_start();
              $_SESSION['usr_loggedin'] = true;
              $_SESSION['email'] = $row['email'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['slno'] = $row['slno'];
              header("location: usr_dashboard.php");
            }
      }else{
        $showError = true;
      }
  }
}
