<html>
<head>
	<title>Blogname a Blogging Category Flat Bootstarp  Responsive Web Template | Contact :: w3layouts</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Blogname Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,300italic,400italic,600italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
				<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->
</head>

<body>
<?php require('header.php') ?>
	 <div class="container">
		 <div class="banner-head">
			 <h1>Lorem ipsum dolor sit amet</h1>
			 <h2>cliquam tincidunt mauris</h2>
		 </div>
	 </div>
</div>
<!---//End-banner---->
<div class="contact">
	 <div class="container">
		 <div class="contact-head">
			 <h3>CONTATO</h3>
			  <form class="" action="envia-contato.php" method="POST">
				  <div class="col-md-6 contact-left">
						<input type="text" name="nome" placeholder="Nome" required/>
						<input type="text" name="email" placeholder="E-mail" required/>
				 </div>
				 <div class="col-md-6 contact-right">
						 <textarea name="mensagem" placeholder="Mensagem"></textarea>
						 <input type="submit" value="ENVIAR"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="col-md-12 locations">
				  <ul>
					 <li><span></span></li>
					 <li>
						 <div class="address-info">
							 <h4>New York, Washington</h4>
							 <p>10-765 MD-Road</p>
							 <p>Washington, DC, United States,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a href="fernando.bonsou@gmail.com">info(at)example.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>
						 </div>
			 	 </div>
			 </div>
			 </div>
			 </div>

<?php include("footer.php") ?>

</body>
</html>
