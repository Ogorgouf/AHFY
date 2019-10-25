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
    
    if(!empty($_POST['type']) AND !empty($_POST['titre_evenement']) AND !empty($_POST['text_contenu']))
    {
        
        $type=htmlspecialchars($_POST['type']);
        $titre=htmlspecialchars($_POST['titre_evenement']);
        $contenu=htmlspecialchars($_POST['text_contenu']);
        if(strlen($titre) <=150)
        {
            if(strlen($contenu)<=2000)
            {
                $insertion = $bdd->prepare("INSERT INTO evenement ( `titre`, `contenu`, `media`, `association`, `categorie`,`date`) VALUES ( ?, ?, '',?,?,now());");
                $insertion->execute(array($titre,$contenu,$association,$type));
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

}
//-----------------------------affichage evenement---------------//

$recup= $bdd->prepare('SELECT * FROM  evenement WHERE association=?');
$recup->execute(array($association));




?>