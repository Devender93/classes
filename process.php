<?php
require 'inc/functions.php';
$obj= new model();
if(isset($_POST['action'])&& $_POST['action']=='login')

{
	

	$obj->login();
}
?>