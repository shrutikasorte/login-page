<?php
session_start();
$name="";
$email="";

$errors=array();



$conn = mysqli_connect("localhost:3307","root@","","registration");
  

   
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	
	
	if(empty($name))
	{
		
	array_push($errors,"name is required");	
		
	}
	if(empty($email))
	{
		
	array_push($errors,"email is required");	
		
	}
	
	if(count($errors)== 0)
	{
		$sql="INSERT INTO signin (name,email,password,address,phone) VALUES('$name','$email','$password','$address','$phone')";
		mysqli_query($conn,$sql);
		$_SESSION['name']=$name;
		$_SESSION['sucess']="you are login in";
		header('location:ind.php');
	}
}
if(isset($_POST['login']))
{
$name=$_POST['name'];
$password=$_POST['password'];	
	$passer=" ";
	if(empty($name))
	{
		
	array_push($errors,"name is required");	
		
	}
	if(empty($password))
	{
		
	array_push($errors,"email is required");	
		
	}
	if(count($errors)== 0)
	{
	$sq= "SELECT * FROM signin WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn,$sq);
	if(mysqli_num_rows($result)==1 ){
	$_SESSION['name']=$name;
    $_SESSION['sucess']="you are login sucessfully";
    header('location:ind.php');	
	}
	else{
		echo "wrong password";
		
		
     $password=Check_input($_POST["password"]);

	}		
	}
}
else
{





}
if(isset($_GET['logout']))
{
session_destroy();
unset($_SESSION['name']);
header('location:login.php');	
	
	
}
  
  
  
  ?>