<?php
require_once "config.php";

$name = $_POST['name'];
$message = $_POST['message'];
$date = date('Y-m-d H:i:s');

$sql = "INSERT INTO message(name,message,date)
VALUES(:name,:message,:date)";

$pre = $pdo->prepare($sql);

$pre->bindParam("name", $_POST['name']);
$pre->bindParam("message", $_POST['message']);
$pre->bindParam(":date", $date);


$pre->execute();

header('Location:../index.php');
?>