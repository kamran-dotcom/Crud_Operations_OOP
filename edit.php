<?php

require_once('db.php');

$operation=new operations();

$id=$_GET['id'];

$result=$operation->editData($id);


?>

<!DOCTYPE html>
<html>
<head>
	<title>OOP Practise</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<h2 class="text-center bg-success">Registration form</h2>

	<div class="col-lg-4 m-auto">

		<?php

		while ($row=mysqli_fetch_assoc($result)) {
			?>
		

	<form method="post">
		ID<input type="text" name="id" value="<?php echo $row['id'];?>" readonly>
		First Name<input type="text" name="fname" class="form-control" value="<?php echo $row['fname'];?>"><br>
		Last name<input type="text" name="lname" class="form-control" value="<?php echo $row['lname'];?>"><br>
		Email<input type="email" name="email" class="form-control" value="<?php echo $row['email'];?>"><br>
		password<input type="password" name="password" class="form-control" value="<?php echo $row['password'];?>"><br>

		<input type="submit" name="update" value="Update" class="btn btn-success">
		<a class="btn btn-primary ml-3" role="button" href="view.php">Read Data</a>

	</form>
<?php } ?>
	</div>

</body>
</html>