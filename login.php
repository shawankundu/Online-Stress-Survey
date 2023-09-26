<?php
// $login = false;
// $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // $conn = new mysqli('localhost','root','','test_db');
  include '_db_con.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
  if (empty($email)) {
		header("Location: index.html?error=User Name is required");
	    exit();
	}else if(empty($password)){
        header("Location: index.html?error=Password is required");
	    exit();
  }
  else{
      $sql = "select * from registration_user where email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
      $num = mysqli_num_rows($result);
      if($num == 1){
            $login = true;
            $row = mysqli_fetch_assoc($result);
            if($row['email'] == $email && $row['password'] == $password){
              session_start();
              $_SESSION['usr_loggedin'] = true;
              $_SESSION['email'] = $row['email'];
              $_SESSION['name'] = $row['name'];
              $_SESSION['id'] = $row['id'];
              header("location: page1.php");
            }
      }else{
        $message = "Please check email and password."; 
        // $showError = true;
      }
  }
}
?>
<script>  
  alert("<?php echo $message; ?>"); 
  window.location.href = "index.html";
</script>