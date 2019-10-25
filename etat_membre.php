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

<section class="etat_membre">
    <form action="" method="post" class="form_etat_membre">
        <div class="photo_etat_membre"></div>
        <table class="table_form_etat_membre">
        <div class="form_label">
            <label for="nom">NOM</label>
            <input class="input_etat_membre" type="text" value="DONFACK NGUIMFACK">
        </div>
        <div class="form_label">
            <label for="nom">PRENOM</label>
            <input class="input_etat_membre" type="text" value="DILANE">
        </div>
        <div class="form_label">
            <label for="nom">FONT DE CAISSE</label>
            <input class="input_etat_membre" type="text" value="100000">
        </div>
        <div class="form_label">
           <label for="nom">SANCTION</label>
            <input class="input_etat_membre" type="text" value="">
        </div>
        <div class="form_label">
            <label for="nom">FONCTION</label>
            <input class="input_etat_membre" type="text" value="DEVELLOPEUR WEB CHEZ DIGITTOUCH">
        </div>
        </table>
        <div class="div_btn_etat_membre">
            <input class="btn_form_etat_membre"type="submit" value="appliquer les modifications">
        </div>
    </form>
</section>

<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>

</body>
</html>