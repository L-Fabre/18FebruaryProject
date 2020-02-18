

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/connexion.css">

    <title> Alpago | Connexion </title>
</head>

<body>
    <?php include_once 'templates/header.php' ?>



    <main>
    <div id="card">
    <form id="form" method="POST" action="./controllers/connexion_c.php">
    <label for="username">Identifiant :</label>
    <input type="text" name="username">
    

    <label for="password">Mot de passe :</label>
    <input type="password" name="password">
    

    <input type="submit" value="Connexion">
    </form>
    </div>
    </main>


    <?php include_once 'templates/footer.php' ?>
</body>
</html>