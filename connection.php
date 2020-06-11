<?php

$host = "localhost";
$db = "ifora";
$name = "root";
$password = "";

$link = mysqli_connect($host, $name, $password, $db);
$query = "SELECT * FROM answers";
$result = mysqli_query($link, $query);
