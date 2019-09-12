<?php
//$USER = $_GET['user'];
//$email = $_COOKIE['email'];
//output response to cmd inj to page
?>

<html>
<head>
</head>
<body>
<h1>Shared File Lookup</h1>
<div>
<?php
if (isset($_POST['dir'])) {
  $dir = $_POST['dir']; } else { $dir = "shared/"; }
  //set path
  $path = "/var/www/html/dos2019yyz/";
  //execute command from input
  $output = shell_exec("ls ".$path.$dir);
  $formatted = "<pre>$output</pre>"
?>
<p>You have access to the files in the following shared directory.</p>
<form action="directory.php" method="POST">
<label for="dir">Directory:</label>
<input type="text" name="dir" value="/shared"/>
<input type="submit" />
</form>
<p>Contents:</p>
<?= $formatted ?>
</div>
</body>
</html>
