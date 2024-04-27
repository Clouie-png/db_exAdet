<?php
$custnumb = $_POST ["custnumb"];
$custname = $_POST ["custname"];
$slsrnumb = $_POST ["slsrnumb"];
$custaddr = $_POST ["custaddr"];
$balance = $_POST ["balance"];
$credlim = $_POST ["credlim"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clo_primera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customer";
$result = $conn->query($sql);


$insert = "INSERT INTO customer (custnumb, custname, slsrnumb, custaddr, balance, credlim)
VALUES ('$custnumb', '$custname', '$slsrnumb', '$custaddr', '$balance', '$credlim')";

if ($conn->query($insert) === TRUE) {
  echo "New record created successfully"."<br>";
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
$newform = "inputform.php";
$viewcust = "viewall.php";
echo '<a href="' . $newform . '" class="button">Add Another Customer</a>'.'<br>';
echo '<a href="' . $viewcust . '" class="button">View Customer Table</a>'.'<br>';

$conn->close();
?>