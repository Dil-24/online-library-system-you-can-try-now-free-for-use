<?php
include "connection.php";
include "navbar.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="style2.css">
<meta chararset="utf-8">
<meta name="viewport" content="device-width,intitial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<!---<div class="logo">
<h1 style ="color:white;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
</div>
<nav>
<ul>
<li> <a href="index1.php"> HOME </a> </li>
<li> <a href="books.php"> BOOKS </a> </li>
<li> <a href="student_login.php"> STUDENT-LOGIN </a> </li>
<li> <a href="registration.php"> REGISTRATION</a> </li>
<li> <a href="feedback.php">FEEDBACK </a> </li>
</ul>
</nav> -->
</header>
<section>
<div class="reg_img">
<br><br><br>
<div class="box2">
<h1 style="text-align:center;color:white; font-size:35px;font-family:Lucida Console;">Library Management System</h1><br>
<h1 style="text-align:center; font-size:25px;color:white;">User Registration Form</h1><br>
<form style="text-align:center;" name= "Registration" action="" method="post">
<br><br>
<div class="login">
<input style = "color:black" class="form-conrtol" type="text" name="first"placeholder="First Name "required=""><br><br>
<input style = "color:black"class="form-conrtol"type="text" name="last"placeholder="Last Name "required=""><br><br>
<input style = "color:black" class="form-conrtol" type="text" name="username"placeholder="Username" required=""><br><br>
<input style = "color:black"class="form-conrtol" type="text" name="roll"placeholder="Roll No "required=""><br><br>
<input style = "color:black"class="form-conrtol" type="password" name="password"placeholder="Password" required=""><br><br>
<input style = "color:black"class="form-conrtol" type="text" name="email"placeholder="Email "required=""><br><br>
<input style = "color:black" class="form-conrtol" type="text" name="contact"placeholder="Contac No "required=""><br><br>
<input class = "btn btn-default" type="submit" name="submit" value="Sign Up" style="color:black;width:90px;height:30px">
</div>
</form>
</div>
</div>
</section>
<?php
if(isset($_POST['submit']))
mysqli_query($db,"INSERT INTO`student` VALUES('$_POST[first]', '$_POST[last]', '$_POST[username]', '$_POST[roll]', '$_POST[password]', '$_POST[email]', '$_POST[contact]'); ");
?>
</body>
</html>