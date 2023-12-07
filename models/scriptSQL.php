<?php

include __DIR__ . '/../config/connect.php';

function add_user($fullname, $email, $Username, $confirm_password, $conn) {

    $insertion_user = mysqli_prepare($conn, 'INSERT INTO users(name,email,user_name,passe_word,role_id) VALUES(?,?,?,?,3)');
    mysqli_stmt_bind_param($insertion_user, "ssss", $fullname, $email, $Username, $confirm_password);
    mysqli_stmt_execute($insertion_user);
    return $insertion_user;
}

function select_user($Username) {
    global $conn;
    $user = mysqli_prepare($conn, 'SELECT * FROM users WHERE user_name = ?');   
    mysqli_stmt_bind_param($user, "s", $Username);

    mysqli_stmt_execute($user);

    $result = mysqli_stmt_get_result($user);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function affiche_user($fullname, $email, $Username, $confirm_password, $conn) {
    $affiche_user = mysqli_prepare($conn, 'SELECT * FROM users WHERE name =? AND email =? AND user_name =? AND passe_word =?');
    mysqli_stmt_bind_param($affiche_user, "ssss", $fullname, $email, $Username, $confirm_password);
    mysqli_stmt_execute($affiche_user);

    return $affiche_user;
}

function affiche_total_user($conn) {
    $affiche_user = mysqli_query($conn, 'SELECT * FROM users');
    return $affiche_user;
}

?>
