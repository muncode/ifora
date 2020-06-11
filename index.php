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
        <h3>Запись на демонстрацию системы iFORA</h3><br />
        <form action="mail.php" method="post" onSubmit="return checkForm(this)">
            <input class="form-control" type="text" name="name" placeholder="ФИО" required/><br />
            <div class="form-row">
                <div class="col">
                    <input class="form-control" type="text" name="phone" placeholder="Телефон"/>
                </div>
                /
                <div class="col">
                    <input class="form-control" type="text" name="mail" placeholder="E-mail"/><br />
                </div>
            </div>
            <input class="form-control" type="datetime-local" name="date" required/><br />
            <textarea class="form-control" name="message" placeholder="Комментарий к письму"></textarea><br />
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
    </body>
    </html>