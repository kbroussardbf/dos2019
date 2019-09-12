<?php
//$USER = $_GET['user'];
//$email = $_COOKIE['email'];

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
mysqli_close($conn);
?>
</table>
</div>
<div>
<a href="updateTable.php">Add/update data</a>
</div>

</body>
</html>
