<!DOCTYPE html>
<html lang="fr">
<head>
    <?php $current ='ahfy'; ?> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php") ?>
    <title>Liste des membres</title>
</head>
<body>
    
<!---------Header------------------------------------------->
<?php include("include/header.php")?>

<section class="liste_des_membres">
    <div class="titre_liste"> <h1>liste des membres</h1> </div>
    <div class="liste_membre">
        <div class="liste">
            <div class="div_photo_profil"></div>
            <div class="infos_membre">
                <p> nom :<i><strong>DONFACK NGUIMFACK </strong></i></p>
                <p> prenom : <i><strong>DILANE</strong></i> </p><br>
                <table>
                    <tr>
                        <td>fond des caisses:</td>
                        <th class="fond_des_caisses">100000</th>
                        <th>FCFA</th>
                    </tr>
                </table>
                <p>sanction:</p>
                <p> fonction: <I><strong>devellopeur web chez digittouch</strong></I></p><br>
                    <form  class="btn_modifier" action="etat_membre.php" method="post">
                        <input class="btn_modifier_profil_membre" type="submit" value="modifier">
                    </form>
            </div>
         </div> 
        
    </div>
</section>

<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>

</body>
</html>