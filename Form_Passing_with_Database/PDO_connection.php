<?php 
    /* 
    01. PDO = Php data object  eta muloto somporno OOP er dara Database er sathe connection kore hoy 
    */


     try {
        $pdo = new PDO('mysql:host=localhost;dbname=pwad54','root',''); // First e mysql host lekhe local host er name dite hobe 
        if($pdo){
            echo "Connetct Successufully";
        };
     } catch (PDOException $ex) { // PDOException eta ekta beintin class. eta error er class
        echo "Error DataBase Connection ".$ex -> getMessage()."<br>"; // Ekhane getMessage() eta beiltin function eta dara muloto dekhay ze ei php program e ki karon e error hoyche take programming er vasay ki bole
     };
?>