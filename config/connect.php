<?php



try {   $conn = mysqli_connect('localhost', 'root', '', 'yourinterface');
    //     	$conn = new PDO("mysql:host=localhost;dbname=yourinterface;port=3306;charset=utf8mb4", 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e) {
    	echo 'Erreur de connexion: ' . $e->getMessage();
    } 

  ?>