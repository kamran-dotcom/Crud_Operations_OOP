<?php

require_once('db.php');

$operation= new operations();

$result=$operation->readData();
?>

<!DOCTYPE html>
<html>
<head>
	<title>view record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col">
				<div class="card mt-5">
					<div class="card-header">
						<h2 class="text-center text-dark">View Record</h2>
					</div>
					<div class="card-body">
						<table class="table table-bordered text-center">
							<tr>
								<td>ID</td>
								<td>First Name</td>
								<td>Last Name</td>
								<td>Email</td>
								<td colspan="2" class="text-center">Operations</td>
							</tr>
							<?php

							while($row=mysqli_fetch_assoc($result))
							{
								?>
								<tr>
									<td><?php echo $row['id'];?></td>
									<td><?php echo $row['fname'];?></td>
									<td><?php echo $row['lname'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><a class="btn btn-secondary"href="edit.php?id=<?php echo $row['id'];?>">Edit</a></td>
									<td><a class="btn btn-danger"href="delete.php?id=<?php echo $row['id'];?>">Del</a></td>
								</tr>
							
						<?php
						}
						?>

							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<a class="btn btn-primary ml-1" role="button" href="view.php">Insert Record</a>

</body>
</html>