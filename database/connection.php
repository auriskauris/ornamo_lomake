<?php
//Tietokantayhteys tänne

// function connectDB(){
//         static $connection;
//         if(!isset($connection)) {
//             $connection = connect();
//         }      
//         return $connection;
// }

// function connect() {
//         $host = getenv('DB_HOST', true) ?: "xx";
//         $port = getenv('DB_PORT', true) ?: 3306; 
//         $dbname = getenv('DB_NAME', true) ?: "xx"; 
//         $user = getenv('DB_USERNAME', true) ?: "xx"; 
//         $password = getenv('DB_PASSWORD', true) ?: "xx"; 

//         $connectionString = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";

//         try {       
//                 $pdo = new PDO($connectionString, $user, $password);
//                 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                 return $pdo;
//         } catch (PDOException $e){
//                 echo "Virhe tietokantayhteydessä: " . $e->getMessage();
//                 die();
//         }
// }

?>