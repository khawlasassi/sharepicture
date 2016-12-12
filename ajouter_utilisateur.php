<?php

include('configuration.php');
try {

    
    if(isset($_POST['submit'])){
                    $sql = "INSERT INTO utilisateur(nom_utilisateur,
                    prenom_utilisateur,
                    login,
                    password) VALUES (
                    :nom_utilisateur, 
                    :prenom_utilisateur, 
                    :login, 
                    :password)";
                                          
                    $stmt = $dbh->prepare($sql);
                                                                  
                    $stmt->bindParam(':nom_utilisateur', $_POST['nom'], PDO::PARAM_STR);       
                    $stmt->bindParam(':prenom_utilisateur', $_POST['pernom'], PDO::PARAM_STR); 
                    $stmt->bindParam(':login', $_POST['username'], PDO::PARAM_STR);
                    // use PARAM_STR although a number  
                    $stmt->bindParam(':password', $_POST['password'], PDO::PARAM_STR);                           
                    $stmt->execute(); 
                    header("location:index.php");

        }
        else
            echo "0";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 