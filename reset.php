<?php
//$USER = $_GET['user'];
$email = $_POST['email'];
setrawcookie('email', $email, time() + (86400 * 30), "/");
$uname = $_POST['uname'];
setrawcookie('uname', $uname, time() + (86400 * 30), "/");

//redirect to reset2.php
if ($email) { 
    header('Location: reset2.php');
} elseif ($uname) {
    header('Location: setup.php');
}
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<div>

<form method="POST" action="reset.php">
<p>Reset password for email:<br/>
<input type="email" value="" id="email" name="email"/><br/>
or for username:<br/>
<input type="uname" value="" id="uname" name="uname"/>
</p>
<input type="submit" value="submit" id="submit" name="submit"/>
</form>

</div>
</body>
</html>
