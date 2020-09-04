<?php

require_once('db.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Practise</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<h2 align="center">Registration form</h2>

	<div class="col-lg-4 m-auto">

	<form method="post">
		First Name<input type="text" name="fname" class="form-control"><br>
		Last name<input type="text" name="lname" class="form-control"><br>
		Email<input type="email" name="email" class="form-control"><br>
		password<input type="password" name="password" class="form-control"><br>

		<input type="submit" name="submit" value="submit" class="btn btn-success">
		<a class="btn btn-primary ml-3" role="button" href="view.php">Read Data</a>

	</form>

	</div>

</body>
</html>