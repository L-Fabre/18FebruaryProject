<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/profil.css">

    <title> Alpago | Profil </title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>

    <div id="ano">
        <h3>Anonymisation</h3>
        <form id="pref" method="POST" action="./controllers/anonyme_c.php">
            <label for="imgProfil">Voulez-vous passer inaperçue ?</label>
            <input type="radio" name="anonymous" value="yes"> Oui
            <input type="radio" name="anonymous" value="no"> Non
            <br>
            <input type="submit">
        </form>
    </div>

    <?php include_once 'templates/footer.php' ?>
</body>
</html>