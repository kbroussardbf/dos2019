<?php
//$USER = $_GET['user'];
$email = $_COOKIE['email'];

$servername = "localhost";
$dbname = "dos2019";
$username = "test";
$password = "pass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//get sec question for email
$question = "";
$answer = "";
$q = "SELECT question FROM Users WHERE email='".$email."'";
$a = "SELECT answer FROM Users WHERE email='".$email."'";
$resultq = mysqli_query($conn, $q);
$resulta = mysqli_query($conn, $a);

if (mysqli_num_rows($resultq) > 0) {
    // output data of each row
    while($rowq = mysqli_fetch_assoc($resultq)) {
        $question = $rowq['question'];
    }
} else {
    echo "Email not found";
}
//validate answer provided; if false, throw error; if correct, redirect to reset3.php;
//$answer = "answer to question";
$error = "<div><p style='background:red;font-color:black;font-size:18pt;'>Incorrect answer; please try again.</p></div>";
if (mysqli_num_rows($resulta) > 0) {
    // output data of each row
    while($rowa = mysqli_fetch_assoc($resulta)) {
        $answer = $rowa['answer'];
	if ($_POST['answer']) {
	    if ($answer == $_POST['answer']) {
	        //redirect to reset3.php
	        header('Location: reset3.php'); 
	    } else { 
	        echo $error;
	    }
	}
    }
} else {
    echo "Something went wrong";
}

mysqli_close($conn);
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<div>

<form method="POST" action="reset2.php"/>
<p>Security question 1: <?php echo $question; ?><br/>
Answer:<br/>
<input id="answer" value="" name="answer" type="text"/>
<input type="submit" id="submit" name="submit" value="submit"/>
</p>
</form>

</div>
</body>
</html>
