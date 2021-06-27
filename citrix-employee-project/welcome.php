<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
	<br><br><br><br>
	<center>

    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
   <h1> Go To <a href="webdev.php">Web Development Sector</a></h1>
   <h1> Go To <a href="graphics.php">Graphics Sector</a></h1>
   <h1> Go To <a href="marketing.php">Marketing Sector</a></h1>
   <h1> Go To <a href="rd.php">R&D Sector</a></h1>
    <h3><a href="logout.php">Logout</a></h3>
    </center>
</body>
</html>