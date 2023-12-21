<?php


session_start();
session_unset();
session_destroy();
header('Location: http://localhost/ecom-2/projet2_Layssar/');

?>