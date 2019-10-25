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