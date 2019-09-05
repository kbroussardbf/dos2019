<?php
//$USER = $_GET['user'];
$email = $_COOKIE['email'];

//$question = sec question for email;
//validate answer provided; if false, throw error; if correct, redirect to reset3.php;
//$answer = "answer to question";
//$error = "<div><p style='background:red;font-color:black;font-size:18pt;'>Incorrect answer; please try again.</p></div>";
?>

<html>
<head>
</head>
<body>
<h1>Reset Password</h1>
<p>
form action="reset2.php"<br/>
Security question 1: <?php echo $question; ?><br/>
Answer:<br/>
Submit button
</p>
</div>
</body>
</html>
