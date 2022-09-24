<?php
    session_start();
    require_once 'connect.php';
    
    $firstname = $_POST['firstname'];
    $midname = $_POST['midname'];
    $lastname = $_POST['lastname'];

    $user_info = array();

    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `firstname` = '$firstname' AND `midname` = '$midname' AND `lastname` = '$lastname'");

    foreach ($check_user as $row) {
        
        $_SESSION['user'] = [
            "login" => $row['login'],
            "password" => $row['password'],
            "firstname" => $row['firstname'],
            "midname" => $row['midname'],
            "lastname" => $row['lastname'],
        ];

        echo "</br>" , var_dump($_SESSION['user']), "</br>";
    };