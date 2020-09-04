
<?php

require_once('db.php');
$db = new db();

class operations extends db {

	public function __construct(){

	}

	
	public function store_data()
	{
		global $db;
		
		
		if(isset($_POST['submit']))
		{
			//echo "sucess";

			$fname=$db->check($_POST['fname']);
			$lname=$db->check($_POST['lname']);
			$email=$db->check($_POST['email']);
			$password=$db->check($_POST['password']);

			//echo "print ";

			if($this->insertDB($fname,$lname,$email,$password))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function insertDB($fname,$lname,$email,$password){
		global $db;

		$query="insert into registration(fname,lname,email,password) values ('$fname','$lname','$email','$password')";

		$result=mysqli_query($db->connection(),$query);

		if($result>0){
			return true;
		}
		else{
			return false;
		}
	}

	public function readData(){

		global $db;

		$query="select * from registration";

		$result=mysqli_query($db->connection(),$query);

		return $result;
	}

	public function editData($id)
	{
		global $db;
		$query="select * from registration where id='$id'";

		$result=mysqli_query($db->connection(),$query);
		return $result;
	}

	public function Data(){

		if(isset($_POST['update']))
		{
			$id=$_POST['id'];
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$email=$_POST['email'];
			$password=$_POST['password'];

			if($this->updateData($id,$fname,$lname,$email,$password))
			{
				return true;
			}
			else
			{
				return false;
			}

		}
		
	}
	public function updateData($id,$fname,$lname,$email,$password)
	{
		global $db;
		$query="update registration set fname='$fname',lname='$lname',email='$email',password='$password' where id='$id' ";

		$result=mysqli_query($db->connection(),$query);

		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	public function deleteData($id)
	{
		global $db;

		$query="delete from registration where id='$id'";

		$result=mysqli_query($db->connection(),$query);

		if($result)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}

if(isset($_POST['submit']))
{

	$test=new operations();
    $ret=$test->store_data();

    if($ret)
    {
    	//echo "<script>alert('Data inserted Sucessfully');</script>";
    	header('location:insert.php');
    }
    else
    {
    	//echo "<script>alert('Data insertion failed');</script>";
    	header('location:insert.php');
    }

}
if(isset($_POST['update']))
{
	$test=new operations();
    $ret=$test->Data();
    if($ret)
    {
    	//echo "<script>alert('Data updat Sucessfully');</script>";
    	header('location:view.php');
    }
    else
    {
    	//echo "<script>alert('Data updation failed');</script>";
    	header('location:view.php');
    }
}



?>