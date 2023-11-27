<?php
session_start();
// Vérifier si l'utilisateur est authentifié
if (!isset($_SESSION['user_authenticated']) || $_SESSION['user_authenticated'] != true) {
    header('Location: login.php'); // Rediriger vers la page d'authentification si l'utilisateur n'est pas authentifié
    exit();
}
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head> 
  <script src="../assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>portail gestion des voitures</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<link href="css/gestionP.css" rel="stylesheet">
</head>



