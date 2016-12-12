<?php
include('configuration.php');
try {
   
    

                    $sql = "INSERT INTO groupe_utilisateurs(id_groupe_amis,
                    login) VALUES (
                    :id_groupe_amis, 
                    :login)";                     
                    $stmt = $dbh->prepare($sql);                                           
                    $stmt->bindParam(':id_groupe_amis', $_GET['id_group'], PDO::PARAM_STR);        
                    $stmt->bindParam(':login', $_GET['name'], PDO::PARAM_STR);
                    // use PARAM_STR although a number                             
                    $stmt->execute(); 
                    header("location:lister_pers.php?group_id=".$_GET['id_group']."&action=more");


    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 