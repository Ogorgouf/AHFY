<header align="center" class="">
<div class="hdr"></div>

    <nav>
    <a href="index.php" class="logoafy"> <img src="img/logoafy.png" title="page d'acceuil" alt="logoafy" ></a>
    <div id="btn_header">
        
        <span></span>
        <span></span>
        <span></span>
        </div>
        
        <div id="headerpc">
        <div class="menu"> 
            <a href="ahfy.php" class="les_liens <?php if($current == "ahfy"){ echo "current";} ?>">AHFY</a>
                <div class='déroulant'>
                        <ul>
                            <li class="sous_liens"><div class="sous_div"><a class="lien"  href="">Listes des membres</a>
                             </div></li>
                            <hr>
                            <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                            
                        </ul>
        </div></div>
       
        <div class="menu"><a href="affy.php" class="les_liens  <?php if($current == "affy"){ echo "current";} ?>" >AFFY</a><div class='déroulant'>
        <ul>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="">Listes des membres</a><div class="membres"></div> </div></li>
                <hr>
                <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                <hr>
            </ul>
        </div></div>
        <div class="menu"> <a href="aj.php" class="les_liens  <?php if($current == "aj"){ echo "current";} ?>">Association des jeunes</a><div class='déroulant'>
            <ul>
                <li class="sous_liens"><div class="sous_div"><a class="lien "  href="cecusfo.php">CECUSFO</a><div class="membres"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien "  href="generation70.php">génération 70</a><div class="membres1"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien "  href="generation80.php">génération 80</a><div class="membres2"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="generation90.php">génération 90</a><div class="membres3"></div> </div></li>
                <hr>
                <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                <hr>
            </ul>
        </div></div>
        <div class="menu">  <a href="groupe_culturel.php" class="les_liens  <?php if($current == "groupe_culturel"){ echo "current";} ?>">Groupes culturels</a><div class='déroulant'>
        <ul>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="lissa.php">LISSA</a><div class="membres"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="nkenah.php">NKENAH</a><div class="membres1"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="madzong.php">MADZONG</a><div class="membres2"></div> </div></li>
                <hr>
              
                <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                <hr>
            </ul>
        </div></div>
       <div class="menu"> <a href="cercle_reflexion.php" class="les_liens  <?php if($current == "cercle_reflexion"){ echo "current";} ?>">Cercles de reflexions</a><div class='déroulant'>
       <ul>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="codef.php">CODEF</a><div class="membres"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="coredef.php">COREDEF</a><div class="membres1"></div> </div</li>
                <hr>
                <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                <hr>
            </ul>
       </div></div>
       <div class="menu"> <a href="" class="les_liens <?php if($current == "autres"){ echo "current";} ?>">Autres</a><div class='déroulant'>
       <ul>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="mere_enfant.php">Mères d'enfants</a><div class="membres"></div> </div></li>
                <hr>
                <li class="sous_liens"><div class="sous_div"><a class="lien"  href="femme_dynamique.php">Femmes dynamiques</a><div class="membres1"></div> </div></li>
                <hr>
               
              
                <li class="sous_liens"><a class="lien" href="">connexion</a></li>
                <hr>
            </ul>
       </div></div>
        </div>
        

    </nav>
    
</header>

<?php include("include/connexion.php")?>