<?php
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

//if user doesn't exist, add them to the db
//if user does exist, nothing

if (isset($_POST['submit'])) {
    // pull usernames
    $list = "SELECT uname FROM Users";
    $haystack = mysqli_query($conn, $list);
    $exists = false;
    
    if ($haystack->num_rows > 0) {
        // output data of each row
        while($row = $haystack->fetch_assoc()) {
            if ($_POST['username'] == $row["uname"]) { $exists = true; }
        }
    }

    if ($exists) {
    // if uname exists, do nothing
    } else {
        $insert = "INSERT INTO Users (uname, pwd) VALUES ('".$_POST['username']."', '".$_POST['password']."')";

        if (mysqli_query($conn, $insert)) {
             //echo "Record inserted successfully";
        } else {
             echo "Error inserting record: " . mysqli_error($conn);
        } 
    } 

    //redirect to index.php?user=$_POST['user']
    header("Location: index.php?user=".$_POST['username']."");
}

mysqli_close($conn);
?>

<html>
<head>
</head>
<body>
<div id="left" style="display:inline-block">
<img src="media/Beagle-Care.jpg" alt="Intranet logo" height="200px" width="" />
</div>
<div id="right" align="right" style="display:inline-block">
<h1>Log in</h1>
<form action="login.php" method="POST">
Username:<br/>
<input type="text" id="username" name="username" value=""/><br/>
Password:<br/>
<input type="text" id="password" name="password" value=""/><br/>
<input type="submit" id="submit" name="submit" value="Log in"/>
</form>
</div>
</body>
</html>
