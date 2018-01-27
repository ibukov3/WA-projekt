<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dobrodošli</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Dobrodošli <?php echo $_SESSION['username']; ?>!</p>
<p>Nalazite se na sigurnoj stranici</p>
<p><a href="dashboard.php">Navigacija</a></p>
<a href="logout.php">Odjava</a>
</div>
</body>
</html>