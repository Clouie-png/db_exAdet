<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clo_primera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}

$sql = "INSERT INTO customer (custnumb, custname, slsrnumb, custaddr, balance, credlim)
VALUES ('144', 'Doe', '12', '222 DAU, MABALACAT', '666.66', '1000.00')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>