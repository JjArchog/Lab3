<head>
<link rel="stylesheet" href="./css/guests.css">
</head>


<body>


<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT id, Username, email, feedback FROM jbarchog_myguests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["Username"]. " - Email: " . $row["email"]. " - Feedback: " . $row["feedback"].  "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<a href="http://localhost/lab3/ci4/public/home">Back</a>