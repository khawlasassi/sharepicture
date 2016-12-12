<!DOCTYPE html>
<html>
<head>
	<title></title>
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
 <script  src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
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
<div class="head">
			<div class="contact">
				<div class="col-md-6 contact-top">
					<h3>Want to work with me?</h3>
					<form method="POST" action="edit.php?id=<?php echo $_GET['id'];?>" enctype="multipart/form-data">
						<div>
					      <span>Fichier :</span>
					      <input type="file" id="email" name="fichier" placeholder="Enter le fichier"  onchange="readURL(this);" >
					      <img id="blah"  />
					    </div>
						<div>
							<span>Description :</span>		
							<input type="text" value="" name="description">						
						</div>
						<div>
							<span>Date :</span>	<br>	
							<input type="date" value="" name="date_photo">						
						</div>
						<div>
							<span>Description lien:</span>		
							<input type="text" value="" name="desc_lien">						
						</div>					
						<div>
							<span>contenue lien :</span>		
							<input type="text" value="" name="contenu_lien">	
						</div>
						
						<input type="submit" name="submit" value="SEND" >
					</form>	
				</div>
				
			<div class="clearfix"> </div>
			</div>
	</div>
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="col-md-3 footer-in">
				<img src="images/fo.png" alt=" ">
			</div>
			<div class="col-md-3 footer-in">
				<img src="images/fo1.png" alt=" ">
			</div>
			<div class="col-md-3 footer-in">
				<img src="images/fo2.png" alt=" ">
			</div>
			<div class="col-md-3 footer-in">
				<img src="images/fo3.png" alt=" ">
			</div>
			<div class="clearfix"> </div>
		</div>
	<p class="footer-class">Copyright &#169; 2015 Square. All rights reserved | Template by <a href="http://w3layouts.com">W3layouts</a></p>
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