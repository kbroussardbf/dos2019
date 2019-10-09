<?php
$uname = $_COOKIE['uname'];

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

//set question and answer for uname
if (isset($_POST['submit'])) {
        $insert = "UPDATE Users SET question='".$_POST['questn']."', answer='".$_POST['ans']."', email='".$_POST['email']."' WHERE uname='".$uname."'";

        if (mysqli_query($conn, $insert)) {
             //echo "Record inserted successfully";
        } else {
             echo "Error inserting record: " . mysqli_error($conn);
        } 

    //redirect to index.php?user=$_POST['user']
    header("Location: index.php?user=".$uname."");
}

mysqli_close($conn);
?>

<html>
<head>
</head>
<body>
<div>
<h1>Security Question</h1>
<form action="setup.php" method="POST">
Email:<br/>
<input type="text" id="email" name="email" value=""/><br/>
Question:<br/>
<input type="text" id="questn" name="questn" value="What is your favorite snack food?" style="width:20em"/><br/>
Answer:<br/>
<input type="text" id="ans" name="ans" value=""/><br/>
<input type="submit" id="submit" name="submit" value="Submit"/>
</form>
</div>
</body>
</html>
