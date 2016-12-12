<?php
include('configuration.php');
session_start();
try {
   
    
    if(isset($_POST['submit'])){
      $req=$dbh->prepare('INSERT INTO photo(
        fichier,
        date_photo,
        description,
        proprietaire,
        groupe_amis,
        desc_lien,
        contenu_lien
        ) VALUES (
        :fichier, 
        :date_photo,
        :description, 
        :proprietaire, 
        :groupe_amis,
        :desc_lien,
        :contenu_lien)');

        if(isset($_FILES['fichier'])){
          $errors= array();
          $file_name = $_FILES['fichier']['name'];
          $file_size =$_FILES['fichier']['size'];
          $file_tmp =$_FILES['fichier']['tmp_name'];
          $file_type=$_FILES['fichier']['type'];
          if($file_size > 2097152){
              $errors[]='File size must be excately 2 MB';
          }
            $file_name=rand().'-'.rand().$file_name;
            if(empty($errors)==true){
               move_uploaded_file($file_tmp,"photos/".$file_name);
               echo "Success";
            }
            else{
               print_r($errors);
            }
             
            $file_name= "photos/".$file_name;                           
        $req->execute(array(
          'fichier'=>$file_name,
          'date_photo'=>$_POST['date_photo'],
          'description'=>$_POST['description'],
          'proprietaire'=>$_SESSION['user'],
          'groupe_amis'=>0,
          'desc_lien'=>$_POST['desc_lien'],
          'contenu_lien'=>$_POST['contenu_lien']));
         $newId =  $dbh->lastInsertId();

                   header("location:single.php?id=".$newId);
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