<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/js.js"></script>
    <title>Обратная связь</title>
</head>
<body>
<?php
$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

if(!empty($_POST['name']) and !empty($_POST['phone']) and !empty($_POST['mail']) and !empty($_POST['date'])){
    $name = trim(strip_tags($_POST['name']));
    $phone = trim(strip_tags($_POST['phone']));
    $mail = trim(strip_tags($_POST['mail']));
    $date = trim(strip_tags($_POST['date']));
    $message = trim(strip_tags($_POST['message']));

    mail('munko-yo@mail.ru',
        'Письмо c формы iForm',
        'Вам написал: '.$name.
        '<br />Его номер: '.$phone.
        '<br />Его почта: '.$mail.
        '<br />Его дата и время: '.$date.
        '<br />Его сообщение: '.$message,
        "Content-type:text/html;charset=utf-8");

    echo "Ваше сообщение успешно отправлено!<br />" .  $back;

    $sql = "INSERT INTO mails (name, phone, mail, date, comment) VALUES ('$name', '$phone', '$mail', '$date', '$message')";
    mysqli_query($link, $sql);

    exit;
}
else {
    echo "Для отправки сообщения заполните все поля!" .  $back;
    exit;
}
?>
</body>
</html>
