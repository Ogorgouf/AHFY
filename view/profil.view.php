<!DOCTYPE html>
<html lang="en">
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
                <p>Nom : <strong>Mamekeju</strong></p>
                <p>Prénom : <strong>Prince</strong></p>
                <p>Date de naissance : <strong>Mamekeju</strong></p>
                <p>Profession : <strong>Administrateur Réseau</strong></p>
                <p>Situation financière : <strong>1000</strong></p>
            </div>
        </div>
    </section>

    <section class="notification">
    <h2 align="center">AJOUTER UN MEMBRE</h2>
    <form class="ajout_membre"  action="" method="post">
    <input type="text"  name="nom_membre" placeholder=" nom"><br><br>
    <input type="text" name="prenom_membre" placeholder=" prenom"><br><br>
    <input type="text" name="profession" placeholder=" profession"><br><br>
    <input type="text" name="situation_financiaire" placeholder=" situation financiaire"><br><br>
    <input id="file" type="file" accept="image/*">
    <label for="file" class="lfile">Image/Video</label><br><br>
    <input type="submit" class=" lfile " value="ajouter" >

    </form>

    
    </section>

    <div align="center" class="insertion">
    
        <form  class="form_insertion" action="" enctype="multipart/form-data">
            <textarea  name="text_contenu" id="txtarea" placeholder=" Ajoutez un événement..." cols="50" rows="10"></textarea><br><br>    
        
            <div class="cat">
            <select class="select" name="type" id="">
                <option value="" disabled selected>--Catégorie d'evenement---</option>
                <option value="Deuil">Mariage</option>
                <option value="Deuil">Deuil</option>
                <option value="Anniversaire">Anniversaire</option>
                <option value="Reunion">Reunion</option>
                <option value="Autres">Autres</option>
            </select>
            <input type="text" name='titre_evenement' placeholder=" titre de l'évènement" class='titre_evenement' >
            <input id="file" type="file" accept="image/*">
            <label for="file" class="lfile">Image/Video</label>
            </div><br>
        <input class="lfile" type="submit" name='inserer' value="Inserer">
        </form>
    </div>
    
    </section>     
    
    <?php include("include/footer.php")?>
</body>
</html>