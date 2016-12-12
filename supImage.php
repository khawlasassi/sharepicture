<?php
 session_start();
$hostname='localhost';
$username='root';
$password='';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=photos",$username,$password);
    
    if(isset($_POST['submit'])){
            $req=$dbh->prepare('DELETE from photo where id=:id');
            $req->execute(array('id'=>$_SESSION['cle']));
             header("location:lister_photo_personne.php?name=".$_SESSION['user']);
        }
        else
            echo "0";
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?> 