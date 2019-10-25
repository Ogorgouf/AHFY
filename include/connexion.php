<section id="sconnexion">
    
   
    <?php if(!isset($_SESSION['id'])){ ?>
        <div  id="bconnexion" title="Connexion compte administrateur">
            <img src="img/admin.png" width="50" alt="">
        </div>
    <div align="center" class="dconnexion">
        <h2>CONNEXION ADMINISTRATEUR</h2>
        <hr>
        <form action="" method="post">
            <br>
            <label for="nom"><b>NOM D'UTILISATEUR</b> </label> <br>
            <input type="text" id="nom" name="nom" placeholder="Nom d'utilisateur..."><br><br><br>
            <label for="nom"><b>MOT DE PASSE</b> </label> <br>
            <input type="text" id="mdp" name="mdp" placeholder="Mot de passe...">
            <input type="submit" name="connexion" id="sbtn" value="CONNEXION">
        </form>
    </div>
    <?php }else{ ?>
    <a href="deconnexion.php" class="me" title="deconnexion">
        <img src="img/admin.png" width="50" alt="">
    </a>
    <?php } ?>
</section>
