<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Success!</title>
<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>
<?php include('connect.php'); ?>
<div id="header">
 <a href="http://www.ua.edu" id="nameplate"></a>
 <a href="index.php" id="logout" class="rounded">Log Out</a>
</div>
<div id="wrapper">
<?php echo "<p>".$message."</p>"; ?>
<?php echo "<p>Installing ".$row['name']."</p>"; ?>
</div>		<!-- End wrapper -->
</body>
</html>