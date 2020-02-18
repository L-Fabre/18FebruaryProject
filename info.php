<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/info.css">

    <title> Alpago | Info </title>
</head>
<body>
    <?php include_once 'templates/header.php' ?>

    <?php if (($_SESSION['username']=='Jon') && ($_SESSION['password']=='1234')): ?>
        
        

    <?php if ($_SESSION['anonymous']=='no'): ?>
        <div class="welcome">
            <h1>Bienvenu, <?= $_SESSION['username'] ?> !</h1>
        </div>
    <?php else: ?>
        <div class="welcome">
            <h1>Bienvenu, Anonyme !</h1>
        </div>
    <?php endif ?>

        <div >
        </div>
        <div id="bigBloc">
            <div class="bioAlpaga">
                <img class="imgAlpa" src="img/alpaga1.jpg">
                <div class="describ">
                    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim saepe numquam veritatis perspiciatis molestias laborum fuga expedita, unde itaque reprehenderit dolore consequatur aliquam voluptas odit libero qui aut magni voluptates?</p>
                </div>
            </div>
            <div class="bioAlpaga1">
                <div class="describ">
                    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim saepe numquam veritatis perspiciatis molestias laborum fuga expedita, unde itaque reprehenderit dolore consequatur aliquam voluptas odit libero qui aut magni voluptates?</p>
                </div>
                <img class="imgAlpa" src="img/alpaga2.jpg">
            </div>

            <div class="bioAlpaga">
                <img class="imgAlpa" src="img/alpaga3.jpg">
                <div class="describ">
                    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim saepe numquam veritatis perspiciatis molestias laborum fuga expedita, unde itaque reprehenderit dolore consequatur aliquam voluptas odit libero qui aut magni voluptates?</p>
                </div>
            </div>

            <div class="bioAlpaga1">
                <div class="describ">
                    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim saepe numquam veritatis perspiciatis molestias laborum fuga expedita, unde itaque reprehenderit dolore consequatur aliquam voluptas odit libero qui aut magni voluptates?</p>
                </div>
                <img class="imgAlpa" src="img/alpaga4.jpg">
            </div>

            <div class="bioAlpaga">
                <img class="imgAlpa" src="img/alpaga5.jpg">
                <div class="describ">
                    <p >Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim saepe numquam veritatis perspiciatis molestias laborum fuga expedita, unde itaque reprehenderit dolore consequatur aliquam voluptas odit libero qui aut magni voluptates?</p>
                </div>
            </div>    
        </div>
    <?php else: ?>
    <div id="welcome1">
        <h1>Bienvenue</h1>
        
        <p>Accès restreint, merci de bien vouloir vous connecter</p>
    </div>           
    <?php endif ?>

<?php include_once 'templates/footer.php' ?> 
</body>
</html>







