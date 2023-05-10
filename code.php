<?php
session_start();
require 'dbcon.php';
if (isset($_POST['delete_client'])) {
	$client_id = mysqli_real_escape_string($con,$_POST['delete_client']);
	$query="DELETE from client WHERE id='$client_id'";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
	         echo "string".mysqli_error($con);
		$_SESSION['message']="client Deleted";
		header("Location: index1.php");
		exit(0);
	}
	else
	{
		$_SESSION['message']=" not Deleted";
		header("Location: index1.php");
		exit(0);
	}
	
}
if (isset($_POST['update_client'])) {
	$client_id=mysqli_real_escape_string($con,$_POST['client_id']);
	$name= $_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['phone'];
	$company=$_POST['company'];
	$query="UPDATE  client SET  name='$name',email='$email',phone='$contact',company='$company' 
	        WHERE id='$client_id'";
	$query_run=mysqli_query($con,$query);
	if ($query_run) {
	         echo "string".mysqli_error($con);
		$_SESSION['message']="Updated successfully";
		header("Location: index1.php");
		exit(0);
	}
	else
	{
		$_SESSION['message']=" not Updated";
		header("Location: index1.php");
		exit(0);
	}
}
if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['phone'];
	$company=$_POST['company'];

	$sql = "insert into client (name, email, phone, company) values('$name', '$email', '$company', '$company')";

	$result = mysqli_query($con, $sql);

	if ($result) {
		$_SESSION['message']="   client is added successfully";
		header("Location: index1.php");
		exit(0);
	}
    else
    {
    	$_SESSION['message']="client is not added ";
		header("Location: client.php");
		exit(0);
    }
}
?>