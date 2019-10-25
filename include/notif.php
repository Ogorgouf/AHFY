
<?php while($r=$recup->fetch()) {?>
<section class="notification">
        <div class="notification_image">
            <h2 align="center"><?= $r['titre'] ?></h2>
            <?php if(move_uploaded_file($_FILES['fichier']['tmp_name'],$repertoire)) { ?>
              <img src="$repertoire.$nom_fichier" alt="">  
            <?php } ?>
        </div>
        <div class="notification_texte">
        <?= $r['contenu'] ?>
            <br> <br>
            <hr>
            <p align="right"><?= $r['date'] ?></p>
        </div>
    </section>
     <section class="notification">

    </section>
    <?php } ?>