<?php 
    $conn = new mysqli("localhost", "root", "","pwad54"); // Database connection er commend
    $sql = "SELECT * FROM employees";
    if(!$result =$conn ->query($sql)){
        trigger_error($conn ->error); // trigger_error eta muloto System er error gula dekhabe ze ki karon e ei error ta hoyeche.
    }
    else {
        echo "We have". $result -> num_rows."rows in the table";
    }
?>