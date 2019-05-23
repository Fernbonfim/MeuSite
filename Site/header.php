<?php require_once 'conecta.php';
			require_once 'comentarios.php';

?> <!-- chamando a conexao com o banco em todos arq que contenham o header-->
<head>
	<title>Projeto Blog</title>
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

</head>
<!---strat-banner---->

<div class="banner">
	 <div class="header">
		  <div class="container">
			  <div class="logo">
					<a href="index.php"> <img src="images/logo.png" title="soup" /></a>
			 </div>
			 <!---INICIO DA NAVBAR---->
			 <div class="top-menu">
				  <span class="menu"> </span>
				   <ul>
						<li class="active"><a href="index.php">HOME</a></li>
						<li><a href="contato.php">CONTATO</a></li>
						<li><a href="termos.php">TERMOS</a></li>
						<li><a href="login_registration/login.php">LOGIN</a></li>
						<div class="clearfix"></div>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
					<script>
					$("span.menu").click(function(){
					$(".top-menu ul").slideToggle("slow" , function(){
					});
					});
					</script>
				<!---//FIM DA NAVBAR---->
		 </div>
	 </div>
