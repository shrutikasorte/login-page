<?php 
include('val.php');
?>


<?php
$nameerr=$passerr=" ";
$name=$pass=" ";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(empty($_POST["name"]))
  {
  
	  $nameerr="please enter first name";
  }
  else{
  $name=Check_input($_POST["name"]);}
  
  if(empty($_POST["password"]))
  {
	  $passerr="please enter password";
  }
  else{
  $pass=Check_input($_POST["password"]);}
}

function Check_input($data)
{
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
?>




<html>
<head>
<title>form</title>
<link href="st.css" rel="stylesheet">
<style>
</style>
</head>
<body background="page.jpg">
<h1><center>REGISTRATION FORM</center></h1>
<form  method="POST" action="login.php">
<section class="h">
<h2>login in</h2>
<p><span>*requried feild</span></p>
<lable>NAME</lable><br><input class="i"type="text" name="name" ><span><?php echo $nameerr;?></span><br><br>
<lable>PASSWORD</lable><br><input type="password" name="password"><span><?php echo $passerr;?></span><br><br>
<input class="j" type="submit" name="login" value="login"><br>
<p>not  a member?<a href="home.php">sign up</a></p>
</section>

</form>

</body>
</html>