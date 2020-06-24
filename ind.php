<?php 
include('val.php');
?>




<html>
<head>
<title>form</title>
<link href="st.css" rel="stylesheet">
<style>
</style>
</head>
<body background="ss.jpg.png">
<h1><center>Fight aganist Corona</center></h1>
<div class="content">
<?php if(isset($_SESSION['success'])); ?>
<div class="error">
<h3>
<?php 
echo $_SESSION['sucess'];
unset($_SESSION['success']);
?>
</h3>
</div>


<?php
if(isset($_SESSION['name']));?>
<p>WELCOME <strong><?php echo $_SESSION['name'];?></strong></p>


<section class="as">
<h2 class="y"><center>personal assisment</center></h2>
<ul>
<li>Experiencing any following symptomes
<input type="radio" value="cough">cough
<input type="radio" value="fever">fever
<input type="radio" value="difficulty in breathing">difficulty in breathing
<input type="radio" value="none">none</li><br>
<li> Have you suffer from following diseases
<input type="radio" value="first">Heart diseases
<input type="radio" value="second">lung diseases
<input type="radio" value="third">hypertension
<input type="radio" value="fourth">none</li><br>
<li>Have you travelled international before 1 month
<input type="radio" value="first">yes
<input type="radio" value="first">no</li><br>
</ul>
</section>








</div>


<section>
<p><center><a href="ind.php?logout='1'" >logout</a></center></p>
</section>




</body>
</html>