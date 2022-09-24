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

    <form action="search.php" method="POST" >
        <input name="firstname" type="text" placeholder="Имя">
        <input name="lastname" type="text" placeholder="Фамилия">
        <input name="midname" type="text" placeholder="Отчество">
        <button type="submit">Далее</button>
    </form>

</body>

</html>