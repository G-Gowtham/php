<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mydb";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

 } 

$sql = "SELECT * from student_details";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        echo "Roll No: " . $row["roll_no"]. " - Name: " . $row["name"]. "<br>";
    }
} 

else {
    echo "0 results";
}

 $conn->close();

?>
