<?php
include('configuration.php');
session_start();


try {
   
    
    if(isset($_POST['submit'])){
                    $sql = "INSERT INTO groupes_amis(nom_groupe_amis,
                    login_proprietaire_groupe) 
                     VALUES (
                    :nom_groupe_amis, 
                    :login_proprietaire_groupe
                     )";
                                          
                    $stmt = $dbh->prepare($sql);
                                                                
                    $stmt->bindParam(':nom_groupe_amis', $_POST['group_name'], PDO::PARAM_STR);       
                    $stmt->bindParam(':login_proprietaire_groupe', $_SESSION['user'], PDO::PARAM_STR);                           
                    $stmt->execute(); 
                    $newId =  $dbh->lastInsertId();

                   header("location:lister_pers.php?group_id=".$newId."&action=add");
                    
        }
        else
            header("location:index.php");
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 