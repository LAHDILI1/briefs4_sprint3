<?php

include __DIR__ . '/../config/connect.php';
include __DIR__ . '/../models/scriptSQL.php';



// function submit($Username_error,$passwords_error){


    if(isset($_POST['submit'])) {  
    $Username = $_POST['Username'];
    $passwords = $_POST['passwords'];

    
    if(empty($Username)) {
        $Username_error = 'Username is required';
    }
    
    if(empty($passwords)) {
        $passwords_error = 'Password is required';
    }
    
    if(empty($Username_error) && empty($passwords_error)) {
        
        $result = select_user($Username);
        
        // $rows = mysqli_fetch_assoc($result);
        
        if(!$result) {
             //header('Location:http://localhost//br03/Pages/authentification/admin/dashboard_admin.php');
            $Username_error = 'This username does not exist';
        } else {
            //!password_verify($passwords, $result['passe_word'])
            if($passwords !=$result['passe_word']) {
                $passwords_error = 'The password is incorrect';
            } else {
                 // header('Location:http://localhost//br03/Pages/authentification/admin/dashboard_admin.php');
                if($result['role_id'] == 1){
                    header('Location:http://localhost//br03/Pages/authentification/admin/dashboard_admin.php');
                } else if($result['role_id'] == 2){
                    header('Location:http://localhost//br03/Pages/authentification/developpeur/dashboard_developpeur.php');
                } else {
                    header('Location:http://localhost//br03/Pages/authentification/visiteur/dashboard_visiteur.php');
                }
            }
        }
    }

    // session_start();
    // $_SESSION["Username_error"] = $Username_error ;
    // $_SESSION["passwords_error"] = $passwords_error ;
    
    // $_SESSION["Username"] = $Username ;
    // $_SESSION["passwords"] = $passwords ;

    // header('Location:http://localhost//br03/Pages/authentification/login.php');


}

?>
