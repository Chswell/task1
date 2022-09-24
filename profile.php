<?php 
    session_start();
    require_once 'connect.php';
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Task 1</title>
</head>

<body>

    <form>
        <h2><?= $_SESSION['user']['lastname']?>
        <?= $_SESSION['user']['firstname']?>
        <?= $_SESSION['user']['midname']?></h2>
        Ваш логин: <?= $_SESSION['user']['login']?> </br></br>
        Ваш пароль: <?= $_SESSION['user']['password']?></br></br>
        <?php 
        if ($_SESSION['user']['login'][0] == "c" && $_SESSION['user']['login'][1] == "t") {
            echo 'Логин и пароль от курса: "Цифровая трансформация учителя"';
        }; ?>

        
        
        
    </form>

</body>

</html>