<?php
//$USER = $_GET['user'];
?>

<html>
<head>
</head>
<body>
<div id="left" style="display:inline-block">
<img src="media/Beagle-Care.jpg" alt="Intranet logo" height="200px" width="" />
</div>
<div id="right" align="right" style="display:inline-block">
<h1>Welcome<?php if ($USER) { echo " ".$USER; } else { echo " Intranet User"; } ?>!</h1>
<ul>
<li><a href="reset.php">Reset your password</a>
</li>
<li>
<a href="directory.php">Shared directory listing</a>
</li>
<li>
<a href="updateTable.php">Data Management Interface (DMI)</a>
</li>
</ul>
</div>
</body>
</html>
