<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clo_primera";

$custnumb = $_POST["custnumb"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT custnumb, custname FROM customer WHERE custnumb ='$custnumb'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "ID:  " . $row["custnumb"]. " - Customer Name: " . $row["custname"]. " " . "<br>";
    }
  } else {
    echo "0 results". "<br>";
  }
  $conn->close();

    $newform = "inputform.php";
    $viewcust = "viewall.php";
    echo '<a href="' . $newform . '" class="button">Add Another Customer</a>'.'<br>';
    echo '<a href="' . $viewcust . '" class="button">View Customer Table</a>'.'<br>';
  ?>