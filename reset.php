<?php
//$USER = $_GET['user'];
$email = $_POST['email'];
setcookie('email', $email, time() + (86400 * 30), "/");
//get sec question for email
//return sec question to reset2.php
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<div>
<p>
form action="reset.php" <br/>
Reset password for email:<br/>
submit button
</p>
</div>
</body>
</html>
