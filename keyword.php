<!DOCTYPE html>
<html>
<head>
	<title>Valorant</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body class="body1">

<div class="topnav">
<a href="index.html">HOME</a>
<a href="hackme.php">HACK ME</a>
<a class="active" href="keyword.php">DEFUSE THE SPIKE</a>
</div>

<br>
<center>
<h2>DEFUSE THE SPIKE..</h2>
<h4>who won the match?</h4>
<form action="keyword.php" method="POST">

<div class="maininput">
	<input type="text" name="key" placeholder="">
	<input type="submit" name="search" value="search">
</div>

<?php
$keyw = $_POST["key"];
if($keyw=="cypher won the match")
{
  echo "Victory";
}
else
{
  echo "Wrong Keyword";
}
?>
</form>
</center>
</body>
</html>