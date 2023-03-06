<head>
<link rel="stylesheet" href="./css/guests.css">
</head>


<body>
<header>
            <nav>
                <ul>
                    <li><a href="#Contact">CONTACT</a></li>
                    <li><a href="#Sports">SPORTS</a></li>
                    <li><a href="#Achiev">ACHIEVEMENTS</a></li>
                    <li><a href="#Educ">EDUCATION</a></li>
                    <li><a href="#About">ABOUT</a></li>
                    <li><a href="#Home">HOME</a></li>
                    <li style="float:left"><a  href="#Home">
                              <img src="img/logo.png" width="25px" height="25px" overflow="hidden" margin-top="-6px" margin-left="10px"></a></li>
                  </ul> 
            </nav>
</header>

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