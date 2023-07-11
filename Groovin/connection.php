<?php
$connect = mysqli_connect('localhost', 'root', '');
$db = mysqli_select_db($connect, 'admanager');

if (!$connect) {
    echo 'Connection failed!';
}

if (!$db) {
    echo 'Database connection failed!';
}
?>
