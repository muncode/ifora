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
    <?
    function login($login,$password) {
        global $link;
        $loginResult = mysqli_query($link,"SELECT * FROM userlist WHERE login='$login' AND password='$password' AND admin='1'");
        if(mysqli_num_rows($loginResult) == 1) {
            return true;
        } else {
            unset($_SESSION['login'],$_SESSION['password']);
            return false;
        }
    }
    if(isset($_POST['login']) && isset($_POST['password'])) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['password'] = $_POST['password'];
    }
    if(isset($_SESSION['login']) && isset($_SESSION['password'])) {
        if(login($_SESSION['login'],$_SESSION['password'])) {
            ?>
            <table class="table" id="my-table-id">
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
            <button type="submit" class="btn btn-outline-primary" onClick="ExportToExcel()">Скачать</button>
            <?
            $echo = null;
        }
        else {

            echo "Логин и пароль не верны.";
        }
    }
    else {
        ?>
        <br/>
        <h5>Войти в панель администратора</h5><br/>
        <div class='table'>
                <div class='table-content'>
                    <form method='post'>
                        <input class="form-control" type='text' placeholder='Логин' name='login' required /><br>
                        <input class="form-control" type='password' placeholder='Пароль' name='password' required /><br>
                        <button type="submit" class="btn btn-outline-primary" >Войти</button>
                    </form>
                </div>
        </div>
        <?
    }
    ?>
</div>
</body>
</html>
