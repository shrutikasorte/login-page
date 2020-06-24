<?php
include('val.php');
?>
<?php
$nameerr=$passerr=" ";
$fname=$pass=" ";
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
  $email=Check_input($_POST["password"]);}
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
<form  method="POST" action="" >
<section class="a">
<h2>sign in</h2>
<p><span>*requried feild</span></p>
<lable>NAME</lable><br><input class="e"type="text" name="name" ><span><?php echo $nameerr ; ?></span><br><br>
<lable>EMAIL</lable><br><input type="email" name="email"><br><br>
<lable>PASSWORD</lable><br><input type="password" name="password"><span><?php echo $passerr; ?></span><br><br>
<lable>PHONE NUMBER</lable><br><input type="text" name="phone"><br>
<lable class="c">DATE OF BIRTH</lable><br><input name="dob"class="b" type="date" ><br>
<lable class="d">ADDRESS</lable><br><textarea name="address" class="f" col="2" row="1"></textarea><br><br>
<center><input class="g" type="submit" name="submit" value="submit"></center><br>
<p class="s">already a member?<a href="login.php">login</a></p>
</section>

</form>

</body>
</html>