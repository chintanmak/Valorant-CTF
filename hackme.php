<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body class="body">

<div class="topnav">
<a href="index.html">HOME</a>
<a  class="active" href="hackme.php">HACK ME</a>
<a href="keyword.php">DIFUSE THE SPIKE</a>
</div>

<br>

<form action="hackme.php" method="POST">
<div class="hack">
	<input type="text" name="name" placeholder="type here..">
	<input type="submit" name="search" value="search">
</div>	
</form>




<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database1";


	$db = new mysqli($servername, $username, $password, $dbname);

	if ($db->connect_error) {
		die("Connection failed: " . $db->connect_error);
	}

	$uname = $_POST["name"];

$records = mysqli_query($db,"SELECT * FROM valo WHERE name='$uname'"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>

    <li><?php echo $data['name']; ?></li>
  	
<?php
}
?>


<?php mysqli_close($db); // Close connection ?>


</body>
</html>