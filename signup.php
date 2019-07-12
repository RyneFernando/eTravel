<?php
$servername="localhost";
$username="root";
$password="";
$dbname="etravel";

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$fname= $_POST["fname"];
$lname=$_POST["last"];
$email=$_POST["Email"];
$password=md5($_POST["password"]);
$birthday=$_POST["birthday"];
$gndr=$_POST["gndr"];
$country=$_POST["country"];
$phone=$_POST["phone"];
$AboutYou=$_POST["AboutYou"];





$sql = "INSERT INTO users(`Fname`, `Lname`, `Email`, `Password`, `Birthday`, `Gender`, `Country`, `Mobile Phone`, `About you`) 
VALUES ('$fname','$lname','$email','$password','$birthday','$gndr','$country','$phone','$AboutYou');";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Account Created Please log in");';
	echo 'window.location.href="login 1.html";';
	echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

