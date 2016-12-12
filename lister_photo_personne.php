<?php 
 session_start();
 include('configuration.php');
 $sql= "SELECT * FROM `photo` where proprietaire=:username";
            $result = $dbh->prepare($sql);
            $result->bindParam(":username" ,$_GET['name']);
            $result->execute();
            $donnees=$result-> fetchAll(PDO::FETCH_ASSOC);

 ?>
 <!DOCTYPE html>
<html>
<head>
<title>Amis </title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style_site.css" rel="stylesheet" type="text/css" media="all" />	
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
				<!-- Navigation from Right To Left -->
			</div> 
		
	<!---->	
		<div class="logo">
			<a href="index.html"><img src="images/logo.png" alt=" "></a>
		</div>	
		<!---->
		
		<div class="clearfix"> </div>
	</div><br><br><br>
	<!---->
	<div class="head">
		<div class="portfolio">
			<div class="col-md-8 port">
				<h3>Les Images de :<?php echo $_GET['name']; ?></h3>
				<form class="form-inline" role="form">
				  <div class="form-group">
				    <label for="pwd">Titre:</label>
				    <input type="password" class="form-control" id="pwd">
				  </div>
				  <button type="submit" class="btn btn-default btn-block">Rechercher</button>
				</form>
			</div>
			<?php if ($donnees==null): ?>
			<div class="col-md-12 ">
				
				<div class="alert alert-danger">
				  <strong>Danger!</strong> <p>Aucune image est trouve de:<?php echo $_GET['name']; ?></p>
				</div>
			</div>
			<?php endif ?>
			<?php foreach ($donnees as $donnee): $s=$donnee['fichier']; ?>
				<div class="col-md-3 port">
					<div class="port-grid">
						<a href="single.php?id=<?php echo $donnee['id']  ?>" class="b-link-stripe b-animate-go  thickbox play-icon">
							<?php echo '<img class="img-responsive " src="'.$s.'" alt="" style="right:42px"/>'  ?>
							 <span class="zoom-icon"> </span> </a>
						</a>
						
					</div>
				</div>
			<?php endforeach ?>
			
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!---->
	<div class="footer">
					<script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>

		<a href="#" id="toTop" class="drop-in"><img src="images/drop.png" alt=" "></a>
</div>
</div>
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <h2>Vertical (basic) form</h2>
		  <form action="ajouteImage.php" method="POST" enctype="multipart/form-data">
		    <div class="form-group">
		      <label>Fichier:</label>
		      <input type="file" class="" id="email" name="fichier" placeholder="Enter le fichier"  onchange="readURL(this);" >
		      <img id="blah"  />
		    </div>
		    <div class="form-group">
		      <label >Date:</label>
		      <input type="date" class="form-control"  name="date_photo" placeholder="Enter la date">
		    </div>
		    <div class="form-group">
		      <label >Description:</label>
		      <input type="text" class="form-control" name="description" placeholder="Enter description">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Description lien:</label>
		      <input type="text" class="form-control"  name="desc_lien" placeholder="Enter description lien">
		    </div>
		    <div class="form-group">
		      <label >Lien:</label>
		      <input type="text" class="form-control"  name="contenu_lien" placeholder="Enter lien">
		    </div>
		    <button type="submit" name='submit' class="btn btn-default">Submit</button>
		  </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</body>
<script type="text/javascript">
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</html>