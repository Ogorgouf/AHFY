<?php while($r=$recup->fetch()) {?>
<section class="notification">
<h2 align="center"><?= $r['titre'] ?></h2>
        <div class="notification_image">
            
           
              <img src="media/<?=$r['image'] ?>" width="531" alt="">  
            
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