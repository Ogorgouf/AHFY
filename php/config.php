<?php
session_start();
$bdd= new PDO("mysql:host=127.0.0.1;dbname=afy","root","");

if(isset($_POST['connexion']))
{
    if(!empty($_POST['nom']) AND !empty($_POST['mdp']) AND isset($association))
    {
        $nom=htmlspecialchars($_POST['nom']);
        $mdp=htmlspecialchars($_POST['mdp']);
        $recuperation= $bdd->prepare(" SELECT * FROM administrateur WHERE nom= ? AND mdp=? AND association=?");
        $recuperation->execute(array($nom, $mdp,$association));
        $req=$recuperation->rowCount();
        $sauvegarde=$recuperation->fetch();
        if($req==1)
        {
            $_SESSION['id']=$sauvegarde['id'];
            header("Location:profil.".$association.".php");
            
        }

    }
    else
    {
        $message="tous les champs doivent etre remplis !!!";
    }
}
//--------------------------deconnexion-------------//

if(isset($_POST['deconnexion']))
{
    header("Location:deconnexion.php");
}

//------------------------evenement---------------------//


if(isset($_POST['inserer']))
{
    $file_name= $_FILES['image']['name'];
    if(!empty($_POST['type']) AND !empty($_POST['titre_evenement']) AND !empty($_POST['text_contenu']))
    {
        
        $type=htmlspecialchars($_POST['type']);
        $titre=htmlspecialchars($_POST['titre_evenement']);
        $contenu=htmlspecialchars($_POST['text_contenu']);
        if(strlen($titre) <=150)
        {
            if(strlen($contenu)<=2000)
            {
                $insertion = $bdd->prepare("INSERT INTO evenement ( `titre`, `contenu`, `media`, `association`, `categorie`,`date`, `image`) VALUES ( ?, ?, '',?,?,now(),?)");
                $insertion->execute(array($titre,$contenu,$association,$type,$file_name));
            }
            else
            {
                $error="Le message est trop long !!!";
            }
        }
        else
        {
            $error="Le titre est trop long !!";
        }
       
    }
    //------------insertion image ----------------//
   
    $file_type= $_FILES['image']['type'];
    $file_size= $_FILES['image']['size'];
    $file_tmp_loc= $_FILES['image']['tmp_name'];
    $file_store= "media/".$file_name;

    move_uploaded_file($file_tmp_loc, $file_store);
    

    if(isset($_FILES['image']) AND !empty($file_name))
    {
        $taillemax= 2097152;
        $extentionvalide=array("jpg","jpeg","gif", "png");
        if($file_size <= $taillemax)
        {
            $extentionoplord=strtolower(substr(strrchr($file_name,"."), 1 ));
            if(in_array($extentionoplord,$extentionvalide))
            {
                $resultat=move_uploaded_file($file_tmp_loc,$file_store);
                

            }
            else
            {
                $message="votre photo  doit etre au forma jif jpeg ou png";
            }
        }
        else
        {
            $message="votre taille d'image doit etre inferieur à 2mo";
        }
    }

    
}

//-------------------systeme de pagination-------------------//

$evenementParPage= 5;
$evenementTotalsreq= $bdd->query('SELECT id FROM evenement');
$evenementTotals=$evenementTotalsreq->rowCount();
$pagesTotals= ceil($evenementTotals/$evenementParPage);
if(isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page']<= $pagesTotals)
{
    $_GET['page']=intval($_GET['page']);
    $pagecourante = $_GET['page'];
}
else
{
    $pagecourante=1;
}
$départ=($pagecourante-1)* $evenementParPage;


//-----------------------------affichage evenement---------------//

$recup= $bdd->prepare('SELECT * FROM  evenement WHERE association=? ORDER BY id DESC LIMIT '.$départ.','.$evenementParPage);
$recup->execute(array($association));


//----------------------------Ajout membre------------------------------//

if(isset($_POST['ajouter']))
{
    $nom_membre = htmlspecialchars($_POST['nom_membre']);
    $profession_membre = htmlspecialchars($_POST['profession']);
    
    $situation_finance = htmlspecialchars($_POST['situation_finance']);

    $insert = $bdd->prepare("INSERT INTO `membres` ( `nom`, `association`, `situation_financiere`, `photo`) VALUES (?, ?, ?, '')");
    $insert->execute(array($nom_membre,$association,$situation_finance));
}


?>