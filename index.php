<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Log In</title>
<link rel="stylesheet" media="screen" type="text/css" href="style.css" />
</head>
<body>
<div id="header">
 <a href="http://www.ua.edu" id="nameplate"></a>
</div>
<?php include('connect.php'); ?>
<p>If you have an existing account, you can log in to view your websites and account information. If you do not currently have an account, you can request an account in the field below.</p>
<form id="login" action="admin.php" method="POST">
 <div class="box">
  <h1>Log In to Your Account :</h1>
 	<label>
      <span>E-mail Address</span>
	  <input type="text" class="input_text" name="login_email" id="login_email" />
	</label>
  	<label>
      <span>Password</span>
	  <input type="password" class="input_text" name="login_pass" id="login_pass" />
	</label>
    <label>
	  <button type="submit" class="button">Log In</button>
  	</label>	 
 </div>
</form>

<br /><br /><br />

<form id="new_login">
 <div class="box">
  <h1>Create a New Account :</h1>
 	<label>
      <span>First Name</span>
	  <input type="text" class="input_text" name="new_fname" id="new_fname" />
	</label>
 	<label>
      <span>Last Name</span>
	  <input type="text" class="input_text" name="new_lname" id="new_lname" />
	</label>
    <label>
      <span>E-mail Address</span>
	  <input type="text" class="input_text" name="new_email" id="new_email" />
	</label>
  	<label>
      <span>Password</span>
	  <input type="text" class="input_text" name="new_password" id="new_password" />
	</label>
    <label>
	  <button type="submit" class="button">Submit Request</button>
  	</label>
 </div> 
</form>

</body>
</html>