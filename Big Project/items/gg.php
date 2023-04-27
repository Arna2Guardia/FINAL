<?php
$correct_password = 'FLAG{1_L0V3_ST3G4N0}';

if(isset($_POST['password']) && $_POST['password'] === $correct_password) {
    header('Location: ../winner.php');
    exit;
} elseif(isset($_POST['password'])) {
    $error_message = 'Incorrect password. Please try again.';
}

header('Location: ../hidden.php');


?>