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
            <input id="file" type="file" accept="image/*">
            <label for="file" id="lfile">Image/Video</label>
        </div><br>
        <input class="inserer" type="submit" name='inserer' value="Inserer">
    </form>
</div>
</section>

<?php include("include/footer.php") ?>    
</body>
</html>