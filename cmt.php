<?php 

include('configuration.php');
session_start();
try {
    
    
    if(isset($_POST['submit'])){
      $req=$dbh->prepare('INSERT INTO commentaire(
        contenu,
        depot,
        id_photo,
        auteur
        ) VALUES (
        :contenu, 
        :depot,
        :id_photo,
        :auteur)');
                            
      $req->execute(array(
        'contenu'=>$_POST['cmt'],
        'depot'=>date("Y-m-d"),
        'id_photo'=>$_GET['id'],
        'auteur'=>$_SESSION['user']));

       header("location:single.php?id=".$_GET['id']);
        }
        else
            echo "0";
          
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>