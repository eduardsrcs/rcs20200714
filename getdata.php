<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/rcs/funcs.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/rcs/dbcon.php';


$name =$_GET['uname'];
$res = [];

$stmt = $db->prepare("SELECT * FROM users WHERE name = ?");

if ($stmt->execute([$name])) {
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $res[] = $row;
  }
}

ddv($res, 0, 1);