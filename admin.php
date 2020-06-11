<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/js.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>iFORA</title>
</head>
<body>
<div class="container">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ФИО</th>
            <th scope="col">Телефон</th>
            <th scope="col">E-mail</th>
            <th scope="col">Дата время</th>
            <th scope="col">Комментарий</th>
        </tr>
        </thead>
        <tbody>

    <?php
    foreach ($result as $row){
        echo '<tr> <th scope="row">' . $row['id'] .  '</th>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['mail'] . '</td>';
        echo '<td>' . $row['date'] . '</td>';
        echo '<td>' . $row['comment'] . '</td></tr>';
    }
    ?>
        </tbody>
    </table>
</div>
</body>
</html>
