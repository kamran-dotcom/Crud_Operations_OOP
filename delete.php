<?php 

require_once('db.php');

$operation=new operations();

$id=$_GET['id'];

$ret=$operation->deleteData($id);

header('location:view.php');


?>