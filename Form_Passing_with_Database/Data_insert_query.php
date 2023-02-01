<?php 
    $conn = new mysqli("localhost", "root", "","pwad54"); // Database connection er commend

    $sql = "insert into employees(id, employee_name, age, email, username, password,dept, join_date, salary, gender) VALUES ('', 'Faiaz','23','njfaiaz@gmail.com','njfaiaz','1234','Operator','2022', '10000','M'), ('', 'Faz','23','njfaiaz@gmail.com','njfaiaz','1234','Operator','2022', '10000','M')";
    if (!$conn -> query ($sql)){
        echo "Error incerting Data";
    }
    else {
        echo " Data SuccessFully Submite";
    }
?>