<?php
include_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des employés d'une PME</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
<a href="index.php" style="text-decoration: none;"><h1>Gestion des employés </h1></a>
<div class="row">
    <diV style="width: 450px;margin:auto;">
        <div class="menue-element">
            <a href="form.php" class="btn btn-info pull-left">Nouveau</a>
        </div>
        <div class="menue-element">
            <form method="get" action="index.php" style="width: 200px;">
                <input type="text" name="recherche" placeholder="Rechercher par nom.." class="form-control ">
            </form>
        </div>
    </diV>
</div>