<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rcs/funcs.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rcs/dbcon.php';

$name = $_POST['name'];
$sname = $_POST['surname'];
$email = $_POST['email'];

$stmt = $db->prepare("INSERT INTO `users` (`name`, `surname`, `email`) VALUES (?, ?, ?)");


$stmt->execute([$name, $sname, $email]);


