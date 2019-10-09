<?php
//$USER = $_GET['user'];
$email = $_COOKIE['email'];

$servername = "localhost";
$dbname = "dos2019";
$username = "shecurity";
$password = "pass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$update = "UPDATE Users SET pwd='".$_POST['newPassword']."' WHERE email='".$email."'";

if (isset($_POST['submit'])) {
//action: update password for $email to $_POST['newPassword'];
   if (mysqli_query($conn, $update)) {
      //redirect to index.php
      header('Location: index.php'); 
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
}

mysqli_close($conn);
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<p>
<form action="reset3.php" method="POST" />
New password:<br/>
<input type="text" id="newPassword" name="newPassword" value="" /> <input type="submit" id="submit" name="submit" value="Reset Password" />
</form>
</p>
</div>
</body>
</html>
