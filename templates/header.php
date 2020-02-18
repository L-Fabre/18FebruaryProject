<?php session_start(); ?>

<header>
    <nav>
        <div id="transp" >
            <ul>
                <li><a href="index.php"><img id="logo" src="img/alpaca.png"></a></li>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="info.php">Info</a></li>
                

                <?php if (($_SESSION['username']=='Jon') && ($_SESSION['password']=='1234')): ?>
                
                <li><a href="profil.php">Profil</a></li>
                <li><a href="controllers/deconnexion_c.php">Deconnexion</a></li>
                
                
                <?php else: ?>
                
                
                
                
                
                <li><a href="connexion.php">Connexion</a></li>             
                <?php endif ?>
                
                
            </ul>
        </div>
    </nav>
</header>