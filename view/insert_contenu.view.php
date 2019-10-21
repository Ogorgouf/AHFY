<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include("include/link.php") ?>
    <title>Inserer</title>
</head>
<body>
<section  class="premiere_vue">
<div class="insertion">
    <div ><a class="bouton_retour" href="">précedent</a></div>
    <form  class="form_insertion" action="" enctype="multipart/form-data">
        <textarea  name="text_contenu" id="" cols="60" rows="30"></textarea><br><br>    
        <label for="type"> preciser une catégorie d'événement</label>
        <select class="select" name="type" id="">
            <option value="Mariage">Mariage</option>
            <option value="Deuil">Deuil</option>
            <option value="Anniversaire">Anniversaire</option>
            <option value="Reunion">Reunion</option>
            <option value="Autres">Autres</option>
        </select><br><br>
        <input class="file" type="file" placeholder="parcourir"><br><br>
        <input class="inserer" type="submit" name='inserer' value="inserer">
    </form>
</div>
</section>

<?php include("include/footer.php") ?>    
</body>
</html>