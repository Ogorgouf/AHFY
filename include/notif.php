<<<<<<< HEAD
<?php while($d = $recup->fetch()){ ?>
<section class="notification">
        <div class="notification_image">
            <h2 align="center"><?= $d['titre'] ?></h2>
        </div>
        <div class="notification_texte">
        <?= $d['contenu'] ?>
            <br> <br>
            <hr>
            <p align="right"><?= $d['date'] ?></p>
        </div>
    </section>
<?php } ?>
=======

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
>>>>>>> f3e4e86a3ecde4e6d733f5abb9df094dc1151f72
