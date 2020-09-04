<?php

require_once('operations.php');
?>
<?php

class db{
	public $connect;

	public function __construct()
	{
		$this->connection();
	}

	public function connection()
	{
		$this->connect=mysqli_connect("localhost","root","","oop_crud");
		if(mysqli_connect_error())
		{
			return mysqli_connect_error();
		}
		else
		{
			return $this->connect;
		}
	}

	public function check($a)
	{
		$return=mysqli_real_escape_string($this->connect,$a);
		return $return;
	}
}
?>