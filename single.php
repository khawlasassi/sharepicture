<?php

session_start();
include 'configuration.php';
try {
    
    $reponse = $dbh->query('SELECT * FROM photo where id="'.$_GET['id'].'"');
    $a = $reponse->fetch();
    $_SESSION['cle']=$a['id'];
        }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

try{
	
	$req=$dbh->query('select * from commentaire where id_photo="'.$_GET['id'].'"');
  }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Square a Photographer Portfolio Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style_site.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Square Responsive web template, Bootstrap Web Templates, Flat Web Templates,  Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
					</script>
					<!---->

</head>
<body>
<div class="main">
	<div class="header">		
			<div class="header-left">
				<div class="main-in">
								<section>
									<button id="showLeft" class="navig"></button>
								</section>
						</div>
				<!--- Navigation from Right To Left -->
				<link rel="stylesheet" type="text/css" href="css/component.css" />
					<script src="js/modernizr.custom.js"></script>
					<script type="text/javascript">
			
					  var _gaq = _gaq || [];
					  _gaq.push(['_setAccount', 'UA-7243260-2']);
					  _gaq.push(['_trackPageview']);
			
					  (function() {
					    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
					  })();
			
					</script>
					<div class="cbp-spmenu-push">
						<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
							<h3>Menu</h3>
							<a href="lister_pers.php" >Accueil</a>
							<a href="lister_photo_personne.php?name=<?php echo $_SESSION['user']; ?>" >Mes Photo</a>
							<a href="lister_pers.php" >Lister Groupe</a>
							<a href="lister_pers.php" >Ajouter Groupe</a>
							<a href="#" data-toggle="modal" data-target="#myModal" >Ajouter Photo</a>
							<a href="deconnecter.php">Déconnecter</a>
						</nav>
				</div>
				<script src="js/classie.js"></script>
					<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),				
				showLeft = document.getElementById( 'showLeft' ),				
				body = document.body;

			showLeft.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeft' );
			};
			function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}
			}
		</script>
				<!--- Navigation from Right To Left --->
		</div>
	<!---->	
		<div class="logo">
			
		</div>	
		<!---->
		<div class="header-right">
			<ul class="social-in">
				<li><a href="#"><i> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
				<li><a href="#"><i class="camera"> </i></a></li>
				<li><a href="#"><i class="dot"> </i></a></li>
				<li><a href="#"><i class="gmail"> </i></a></li>
				<li><a href="#"><i class="message"> </i></a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->
	<div class="head">
		<div class="single"><form action="supImage.php" method="POST"><button type="submit" name="submit"  value="suprimer">Supprimer</button></form>
				<div class="single-top">
					<?php echo '<img class="img-responsive " src="'.$a['fichier'].'" alt="" style="right:42px"/>'  ?>
				</div>
				<div class="top-single">
					<h2><?php echo $a['description']; ?></h2>
					<div class="grid-single">
						<div class="single-one"><i> </i><?php echo $a['date_photo']; ?> </div>
						
						<div class="clearfix"> </div>
					</div>
						
					<div class="single-middle">
						<ul class="social-share">
							<li><h3>Déposer par:<?php echo $a['proprietaire']; ?></h3></li>
													
									
						</ul>
						
						<div class="clearfix"> </div>
					</div>
					<div class="top-comments">
						<div class="met">
							<div class="code-in">
								<p class="smith"><a href="#">Description line : </a> <span><?php echo $a['desc_lien']; ?></span></p>
								<p class=""><i>Contenu lien :  </i><a href="#"><?php echo $a['contenu_lien']; ?></a></p>
								<div class="clearfix"> </div>
							</div><?php while ($donnee = $req->fetch()){?>
							<div class="comments-top-top">
								<div class="men" >
									<img   src="images/men.png" alt=""> 
									
								</div>					
									<p class="men-it"><?php echo $donnee['contenu'];?></p>
								<div class="clearfix"> </div>
							</div><br><?php } ?>
						</div>
					
					</div>
				</div>
				<div class="leave">
					<h3>Leave a comment</h3>
						<form action="cmt.php?id=<?php echo $_GET['id']; ?>" method="POST">
							
							
							<div class="text-top">
								<div class="col-md-8 text-in">
									<textarea value=" " name="cmt"></textarea>
								</div>
								<div class="col-md-4 text-in">
									<input type="submit" name="submit" value="SEND" >
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
						
				</div>
	    </div>
	</div>		
					
				
</div>		
	<div class="footer">
				
			<p class="footer-class">Copyright &#169; 2015 Square. All rights reserved | Template by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
</body>
</html>
