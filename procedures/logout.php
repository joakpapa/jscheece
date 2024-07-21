<?php
//Αποσύνδεση χρήστη.
session_start();
//session_unset();
session_destroy();
header("Location: ../login-page.php");
?>
