 <!DOCTYPE html>
<html lang="fr">
<head>
<?php $current = " " ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php")?>
    <title>Profil</title>
</head>
<body>
<?php include("include/header.php")?>
<section class="notifications">
    
    
    <section class="notification">
    <h2 align="center">INFORMATIONS PERSONNELLES</h2>
    <div class="photo_admin">
                
                </div>
        <div class="notification_texte">
            
            <div class="infos_admin">
            <?php if($association=="ahfy"){ ?>
                <p>Nom : <strong> AHFY </strong></p>
                <p>Prénom : <strong>AHFY</strong></p>
                <p>Date de naissance : <strong>AHFY</strong></p>
                <p>Profession : <strong>AHFY</strong></p>
                <p>Situation financière : <strong>AHFY</strong></p>
            <?php } ?>
            <?php if($association=="affy"){ ?>
                <p>Nom : <strong> AFFY </strong></p>
                <p>Prénom : <strong>AFFY</strong></p>
                <p>Date de naissance : <strong>AFFY</strong></p>
                <p>Profession : <strong>AFFY</strong></p>
                <p>Situation financière : <strong>AFFY</strong></p>
            <?php } ?>
            </div>
            <?php if(isset($_SESSION['id'])){ ?>
            <form action="" method="post">
            <input type="submit" name="deconnexion" value="deconnexion" class="lio">
            </form>
            
            <?php } ?>
        </div>
    </section>
<?php if(isset($_SESSION['id'])){ ?>
    <section align="center" class="notification">
    <h2 align="center">AJOUTER UN MEMBRE</h2>
    <form class="ajout_membre"  action="" method="post">
        <input type="text"  name="nom_membre" placeholder=" nom" required><br><br>
        <input type="text" name="profession" placeholder=" profession" required><br><br>
        <input type="text" name="situation_finance" placeholder=" situation financiere" required><br><br>
        <input id="file" name="fichier2" type="file" accept="image/*">
        <label for="file" class="lfile">Image/Video</label><br><br>
        <input type="submit" class=" lio " name="ajouter" value="ajouter" >

    </form>

    
    </section>

    <div align="center" class="insertion">
    
        <form  class="form_insertion" action="" method="post" enctype="multipart/form-data">
            <textarea  name="text_contenu" id="txtarea" placeholder=" Ajoutez un événement..." cols="50" rows="10"></textarea><br><br>    
        
            <div class="cat">
            <select class="ki" name="type" id="">
                <option value="" disabled selected>--Catégorie d'evenement---</option>
                <option value="Deuil">Mariage</option>
                <option value="Deuil">Deuil</option>
                <option value="Anniversaire">Anniversaire</option>
                <option value="Reunion">Reunion</option>
                <option value="Autres">Autres</option>
            </select>
            <input type="text" name='titre_evenement' placeholder=" titre de l'évènement" class='hi' >
            <input  type="file" name="image" accept="image/*">
            
            </div><br>
        <input class="lfile" type="submit" name='inserer' value="Inserer">
        </form>
    </div>
<?php } ?>
    
    </section>     
    
    <?php include("include/footer.php")?>
</body>
</html>