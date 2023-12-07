<?php

include __DIR__ . '/../models/scriptSQL.php';

include __DIR__ . '/../config/connect.php';


//  name="fullname" name="Username" name="email" name="password" name="confirm_password"
//if(!empty($_POST['fullname']) && !empty($_POST['Username']) && !empty($_POST['email']) && !empty($_POST['passwords']) && !empty($_POST['confirm_password'])){...}else{
			// 	echo 'Attention, Tous Les Champs Sont Obligatoires !!';
			// }



if(isset($_POST['fullname']) && isset($_POST['Username']) && isset($_POST['email']) && isset($_POST['passwords']) && isset($_POST['confirm_password'])){
			
				
				$fullname = htmlspecialchars($_POST['fullname']);
				$Username = htmlspecialchars($_POST['Username']);
				$email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['passwords']);
                $confirm_password = htmlspecialchars($_POST['confirm_password']);

				$name_error = '';
                $email_error = '';
                $Username_error = '';
				$passwords_error = '';
				$confirm_password_error = '';
				
                if(empty($fullname)) {
                    $name_error = 'name is requered';

                }

                if(empty($email)) {
                    $email_error = 'email is requered';
                } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $email_error = 'email is invalid';
                }
                
                if(empty($Username)) {
                    $Username_error = 'Username is requered';
                }
                
                if(empty($password)) {
                    $passwords_error = 'password is requered';
                }
                
                if(empty($confirm_password)) {
                    $confirm_password_error = 'confirm password is requered';
                }
                elseif($confirm_password!=$password) {
                    $confirm_password_error = 'the passwords are not identical';
            }

				if(empty($name_error) && empty($email_error) && empty($Username_error) && empty($passwords_error) && empty($confirm_password_error)) {

			                // $sql = "INSERT INTO users (fullname, Username, email, password) VALUES ('$fullname', '$Username', '$email', '$password')";
							// $result = mysqli_query($conn, $sql);
                
							
				
				if(add_user($fullname,$email,$Username,$confirm_password,$conn)) {
                    echo 'Votre compte a été crée avec succés';
                } else {
                    echo 'Erreur de connexion: '. mysqli_error($conn);
                }
                }
				else{
                    echo 'Attention, Tous Les Champs Sont Obligatoires!!';
                }



                

                    

                mysqli_close($conn);


            }

		




				

				// echo 'L\'utilisateur a été bien ajouté !!';
			
		// }

?>