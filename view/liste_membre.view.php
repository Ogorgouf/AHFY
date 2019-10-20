<!DOCTYPE html>
<html lang="fr">
<head>
    <?php $current = 1; ?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/link.php") ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des membres</title>
</head>
<body>
    
<!---------Header------------------------------------------->
<?php include("include/header.php")?>

<section class="liste_des_membres">
    <div class="entete_liste">
         <div class="titre_liste_membre">membres de l' AFY</div>
         <div class="admin">connexion&gt;</div>
         <div class="form">
            <form action="" method="POST">
                <input class="input_email_mdp" type="email" name="email" placeholder="email..."><br><br><br>
                <input class="input_email_mdp" type="password" name="mot_de_passe" placeholder="Mot De Passe"><br><br><br>
                <input class="submit" type="submit" value="se connecter" name="connexion">
            </form>
         </div>
    </div>
    <div class="liste_membre">
        <div class="liste">
            <div class="photo_de_profil">photo</div>
            <div class="nom">
                <p> nom :<i><strong>DONFACK NGUIMFACK </strong></i></p>
                <p> prenom : <i><strong>DILANE</strong></i> </p><br><br>
                <p> statut: <I><strong>devellopeur web chez digittouch</strong></I></p>
            </div>
        </div>
        <div class="liste">
            <div class="photo_de_profil">photo</div>
            <div class="nom">
                <p> nom :<i><strong>DONFACK NGUIMFACK </strong></i></p>
                <p> prenom : <i><strong>DILANE</strong></i> </p><br><br>
                <p> statut: <I><strong>devellopeur web chez digittouch</strong></I></p>
            </div>
        </div>
        <div class="liste">
            <div class="photo_de_profil">photo</div>
            <div class="nom">
                <p> nom :<i><strong>DONFACK NGUIMFACK </strong></i></p>
                <p> prenom : <i><strong>DILANE</strong></i> </p><br><br>
                <p> statut: <I><strong>devellopeur web chez digittouch</strong></I></p>
            </div>
        </div>
        <div class="liste">
            <div class="photo_de_profil">photo</div>
            <div class="nom">
                <p> nom :<i><strong>DONFACK NGUIMFACK </strong></i></p>
                <p> prenom : <i><strong>DILANE</strong></i> </p><br><br>
                <p> statut: <I><strong>devellopeur web chez digittouch</strong></I></p>
            </div>
        </div>
    </div>
</section>

<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>

</body>
</html>