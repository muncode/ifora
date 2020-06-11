<?php

$host = "localhost";
$db = "ifora";
$name = "root";
$password = "";

$link = mysqli_connect($host, $name, $password, $db);
$query = "SELECT * FROM mails";
$result = mysqli_query($link, $query);

