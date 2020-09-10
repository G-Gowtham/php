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

?>

<!DOCTYPE html> 
<html> 
	<head> 
		<title> Fetch Data From Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="4"><h2>Student Record</h2></th> 
		</tr> 
			  <th> Roll No</th> 
			  <th> Name </th> 
		</tr> 
		
		<?php while($row = $result->fetch_assoc())
		{ 
		?> 
		<tr> 
        <td><?php echo $row['roll_no']; ?></td> 
		<td><?php echo $row['name']; ?></td> 
		</tr> 
	<?php 
        } 
        $conn->close();
    ?> 

	</table> 
	</body> 
	</html>