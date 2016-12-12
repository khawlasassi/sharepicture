<?php
 session_start();
include('configuration.php');

try {
   
    
    if(isset($_POST['submit'])){
            $sql= "SELECT * FROM `utilisateur` WHERE `login` = :username and `password` = :password ";
            $result = $dbh->prepare($sql);
            
            $result->bindParam(":username" ,$_POST['username']);
            $result->bindParam(":password" ,$_POST['password']);
            $result->execute();
            $num=$result->rowCount();
            $donnees=$result-> fetchAll(PDO::FETCH_ASSOC);
            if($num > 0){
               $_SESSION["user"]=$donnees[0]['login'];
               header("location:lister_pers.php");
            }
            else
            {
              header("location:index.html");
            }
        }
        else
            echo "0";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 