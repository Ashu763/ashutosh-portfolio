<?php
session_start();

// saare session variables hata do
session_unset();

// session destroy kar do
session_destroy();

// login page par redirect
header("Location: admin_login.php");
exit;