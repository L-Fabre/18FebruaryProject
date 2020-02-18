<?php session_start(); ?>

<header>
    <nav>
        <div id="transp" >
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Info</a></li>
                

                <?php if (($_SESSION['username']=='Jon') & $_SESSION['password']=='1234'): ?>
            <div class="dropdown">
                <button class="btn"><?= $_SESSION['name'] ?></button>
                <div class="dropdown-content">
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="controllers/logout.php">Deconnexion</a></li>


            <?php else: ?>
                <li><a href="login.php">Connexion</a></li>             
            <?php endif ?>
            </ul>
        </div>
    </nav>
</header>