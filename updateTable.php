<?php
//$USER = $_GET['user'];
//$email = $_COOKIE['email'];

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

//sqli updates
//maybe using cast bypass?
$insert = "INSERT INTO Products (prod_name, price, description, prod_id) VALUES ('".$_POST['up_name']."', '".$_POST['up_price']."', '".$_POST['up_descr']."', '".$_POST['up_id']."')";

$update = "UPDATE Products SET prod_name='".$_POST['up_name']."', price='".$_POST['up_price']."', description='".$_POST['up_descr']."' WHERE prod_id='".$_POST['up_id']."'";

if (isset($_POST['submit'])) {
// pull Products.prod_id array
    $list = "SELECT prod_id FROM Products";
    $haystack = mysqli_query($conn, $list);
    $exists = false;
    
if ($haystack->num_rows > 0) {
    // output data of each row
    while($row = $haystack->fetch_assoc()) {
        if ($_POST['up_id'] == $row["prod_id"]) { $exists = true; }
    }
}

    if ($exists) {
    // if up_id in array, updateRecord();
        if (mysqli_query($conn, $update)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
    } else {     
    // if up_id NOT in array, insertRecord(); 
      if (mysqli_query($conn, $insert)) {
        echo "Record inserted successfully";
    } else {
        echo "Error inserting record: " . mysqli_error($conn); 
    }
    } 
}

mysqli_close($conn);
?>

<html>
<head>
<style>
td { 
padding: 5px;
}
td.id {
width: 7em;
}
td.name {
width: 20em;
} 
td.price {
text-align: right;
width: 7em;
}
td.description {
}
tr.form-th-row {
/*visibility: hidden;*/
}
</style>
</head>
<body>
<h1>Data Management Interface</h1>
<div>
<p>
Please help us keep records up-to-date!
</p>
</div>

<div>
<table><tr class="form-th-row"><th style="width:8em">ID</th><th style="width:17em">Name</th><th style="width:10em">Price (USD)</th><th style="width:10em">Description</th><th></th></tr></table>
<form method="post" action="updateTable.php">
<input type="text" value="" name="up_id" id="up_id" size="8"/><input type="text" value="" name="up_name" id="up_name" size="30"/><input type="text" value="" name="up_price" id="up_price" size="10"/><input type="text" value="" name="up_descr" id="up_descr" size="50" maxlength="300"/><input type="submit" name="submit" value="Update Records"/>
</form>
</div>

</body>
</html>
