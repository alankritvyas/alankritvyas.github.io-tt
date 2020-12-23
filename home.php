<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<a href="index2.php">My portfolio website</a>
     <a href="logout.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>