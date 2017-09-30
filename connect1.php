/*<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
echo "Connected successfully<br>";

/*
$sql = "CREATE DATABASE mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " .$conn->error;
}
*/


}

$sql="USE test ";
if($conn->query($sql)==TRUE) {
	echo "Database changed successfully.<br>";
/*
$sql="CREATE TABLE student("
."studId int(4) AUTO_INCREMENT PRIMARY KEY,"
."studName varchar(40),"
."gender varchar(6),"
."age int(2))";

if($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " .$conn->error;"<br>";
}
*/
}
else{
	 echo "Error connecting database: " .$conn->error;"<br>";

}



$sql="INSERT INTO student(studName,gender,age)VALUES('aman','female',12);";
$sql.="INSERT INTO student(studName,gender,age)VALUES('arsh','male',14);";
$sql.="INSERT INTO student(studName,gender,age)VALUES('amrit','female',23);";
if ($conn->multi_query($sql) === TRUE){
	$last_id = $conn->insert_id;
	echo "new record created successfully:".  $last_id."<br>";
}
else{
	echo "Error inserting record: " .$conn->error;
}












$conn->close();

?>
*/



