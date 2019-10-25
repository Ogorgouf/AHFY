<!DOCTYPE html>
<html lang="fr">
<head>
<?php $current = "ahfy" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("include/link.php") ?>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AHFY</title>
</head>
<body>
    
<!---------Header------------------------------------------->
<?php include("include/header.php")?>
<section  class="premiere_vue">
    <div  class="presentation">
       <span class="nom_association">association des hommes fokoué de yaoundé</span><br>
       <span class="slogan">Rassemblement de tous les hommes fokoué de yaoundé</span>
    </div>
    
   

    
</section>
<section class="notifications">
    <br><br>
    <h1 align="center">NOTIFICATIONS</h1>
    
<?php while($r=$recup->fetch()) {?>
<section class="notification">
        <div class="notification_image">
            <h2 align="center"><?= $r['titre'] ?></h2>
           
              <img src="media/<?=$r['image'] ?>" width="400px" alt="">  
            
        </div>
        <div class="notification_texte">
        <?= $r['contenu'] ?>
            <br> <br>
            <hr>
            <p align="right"><?= $r['date'] ?></p>
        </div>
    </section>
    <?php } ?>
    <?php 
    for($i=1; $i<=$pagesTotals;$i++)
    {
        echo '<div class="pagination"><a class="page" href=ahfy.php?page='.$i.'>'.$i.'</a>';
    }
    ?>
</section>

<!---------Footer------------------------------------------->
<?php include("include/footer.php")?>

</body>
</html>