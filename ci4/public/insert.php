<head>
<link rel="stylesheet" href="./css/guests.css">
</head>


<body>



<?php
$Username = filter_input(INPUT_POST, 'Username');
$email = filter_input(INPUT_POST, 'email');
$feedback = filter_input(INPUT_POST, 'feedback');

if (!empty($Username)){
    if (!empty($email)){
        if (!empty($feedback)){

                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "webprogmi211";

// CONNECTION HERE
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error (' . mysqli_connect_errno() . ') '
    . mysqli_connect_error());
}else{
    $sql = "INSERT INTO jbarchog_myguests (Username, email, feedback)
    values ('$Username', '$email', '$feedback')";
    if ($conn->query($sql)){
        echo "Your feedback has been submitted.";
    }else{
        echo "Error: ". $sql . "<br>". $conn->error;
}
    $conn->close();
} 
}else{
    echo "Feedback should not be empty";
    die();
}
} else {
    echo "Email should not be empty";
    die();
 }
} else {
        echo "Name should not be empty";
        die();
    }

?>

<a href="http://localhost/lab3/ci4/public/home">Back</a>
