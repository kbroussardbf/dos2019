<?php
//$USER = $_GET['user'];
//$email = $_COOKIE['email'];

$servername = "localhost";
$dbname = "dos2019yyz";
$username = "test";
$password = "pass";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
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
visibility: hidden;
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
<table>
<tr><th>ID</th><th>Name</th><th>Price (USD)</th><th>Description</th></tr>
<?php 
//insert data table
$sql = "SELECT prod_id, prod_name, price, description FROM Products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td class='id'>" . $row["prod_id"]. "</td><td class='name'>" . $row["prod_name"]. "</td><td class='price'>$" . $row["price"]. "</td><td class='description'>" . $row['description']. "</td></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
</div>
<div>debug:<?php echo $_POST['up_id']; ?></div>
<div>
<table>
<form method="post" action="updateTable.php">
<tr class="form-th-row"><th>ID</th><th>Name</th><th>Price (USD)</th><th>Description</th><th></th></tr>
<tr><td><input type="text" value="" id="up_id" size="8"/></td><td><input type="text" value="" id="up_name" size="30"/></td><td><input type="text" value="" id="up_price" size="10"/></td><td><input type="text" value="" id="up_descr" size="50" maxlength="300"/></td><td><input type="submit" value="Update Record"/></td></tr>
</form>
<?php
//sqli updates
//maybe using cast bypass?
$update = "UPDATE Products SET prod_name='".$_POST['up_name']."', price='".$_POST['up_price']."', description='".$_POST['up_descr']."' WHERE prod_id='".$_POST['up_id']."'";

function updateRecord() {
   if (mysqli_query($conn, $update)) {
      echo "Record updated successfully";
   } else {
      echo "Error updating record: " . mysqli_error($conn);
   }
}
if (isset($_POST['submit'])) {
    updateRecord();
}
?>
</table>
</div>

</body>
</html>
