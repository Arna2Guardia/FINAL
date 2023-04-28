<?php
require_once "config.php";

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
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
