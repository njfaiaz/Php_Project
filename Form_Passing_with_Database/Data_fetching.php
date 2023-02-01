<?php 
error_reporting(0); // error_reporting(0); eta mane holo ze wornig gula dekhabe na.
$conn = new mysqli("localhost", "root", "","pwad54"); // Database connection er commend

if($conn -> Connect_Error){
    echo " Database Connection Error". " ". $conn -> Connect_Error;
}
$result = $conn -> query("SELECT * FROM employees");
$rows = $result -> fetch_assoc(); // fetch_assoc() holo row er index er value jana zabe
echo ($rows['employee_name'])."<br>";
echo ($rows['email']);



?>