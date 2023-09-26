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

<body>
	<div class="col-sm-10 d-grid mb-3 gap-2 d-flex justify-content-between">
		<!-- <a class="page-link" href="index.html">Home</a> -->
		<a class="page-link" href="logout.php">logout</a>
	</div>
	<h1>From Submit Successfully</h1>
	<table class="table" id="myTable">
		<thead>
			<tr>
				<th scope="col">Id</th>
				<th scope="col">Quistion No</th>
				<th scope="col">Answer</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include '_db_con.php';
				session_start();
				$id = $_SESSION['id'];
				$sql = "SELECT test.student_id, test.qusetion_no, test.answer FROM `test` WHERE student_id = '".$id."'";
				$result = $conn->query($sql);
				$data = array();
				while ($row = mysqli_fetch_assoc($result)) {
					$data[] = $row['answer'];
					echo"
					<tr>
					<td>" . $_SESSION['id'] . "</td>
					<td>" . $row['qusetion_no'] . "</td>
					<td>" . $row['answer'] . "</td>
					</tr>";
				}
				$counts = array_count_values($data);
				echo $counts['0'];
				echo $counts['1'];
				echo $counts['-1'];
				
				echo"
				
				<tr>
					<td><h1>Total = </h1></td>
					<td><h1>".array_sum($data)."</h1></td>
					<td><h1></h1></td>
				</tr>"
			?>
		</tbody>
	</table>
</body>

</html>