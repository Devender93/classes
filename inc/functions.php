<?php
class model

	{
	public $connect;

	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'classes';
	function __construct()
		{
		$this->database_connect();
		}

	public function database_connect()
		{
		$this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		}

	public	function execute_query($query)
		{
		return mysqli_query($this->connect, $query);
		}

	public	function locate($url)
		{
		header('location:' . $url . '');
		exit;
		}

	public	function insert()
		{

		// $insert = "INSERT INTO  `username`, `password`  FROM `userlogin` WHERE username=$username AND password=$password";

		$insert = "INSERT INTO userlogin(username,password)VALUES('$username','$password')";

		// echo $insert;

		$query = $this->execute_query($insert);
		echo 'Data Inserted';
		}

	public	function login()
		{
		$username = mysqli_real_escape_string($this->connect, $_POST['Username']);
		$password = mysqli_real_escape_string($this->connect, $_POST['password']);
		$select = "SELECT * FROM userlogin WHERE username='$username' AND password='$password'";
		$query = $this->execute_query($select);
		if (mysqli_num_rows($query) > 0)
			{
			print ("Hello Devender");
			}
		  else
			{
			print ("Ops something went wrong");
			}
		}

	public	function select()
		{
		$select = "SELECT * FROM userlogin";
		$query = $this->execute_query($select);
		if (mysqli_num_rows($query) > 0)
			{
			while ($row = mysqli_fetch_assoc($query))
				{
				echo "<pre>";
				print_r($row);
				}
			}
		  else
			{
			echo "0 results";
			}
		}
		
		
		public function update($id)
		{
			
			$update ="";
			$query = $this->execute_query ($update);
			return $query;
		}
	}

?>

 

 
