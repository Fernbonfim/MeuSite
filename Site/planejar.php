<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<html>
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

<body>
 <?php require('header.php') ?>
	 <div class="container">
		 <div class="banner-head">
			 <h1>Lorem ipsum dolor sit amet</h1>
			 <h2>cliquam tincidunt mauris</h2>
		 </div>
     <div class="content">
     <div class="container">
     <div class="content-grids">
       <div class="banner-links">
         <ul>
           <li><a href="index.php">HISTÓRIAS</a></li>
           <li class="active"><a href="planejar.php">PLANEJE SUA VIAGEM</a></li>
           <li><a href="melhoresh.php">MELHORES HOTÉIS</a></li>
           <div class="clearfix"></div>
         </ul>
       </div>
        </div>
       <div class="col-md-8 content-main">

       </div>

			 <div class="col-md-4 content-main-right">
		     <div class="search">
		         <h3>PESQUISAR</h3>
		        <form>
		          <input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
		          <input type="submit" value="">
		        </form>
		     </div>
		     <div class="categories">
		       <h3>CATEGORIAS</h3>
		       <li class="active"><a href="#">Donec quis dui at dolor tempor</a></li>
		       <li><a href="#">Vestibulum commodo felis quis tort</a></li>
		       <li><a href="#">Fusce pellentesque suscipit</a></li>
		     </div>
		     <div class="archives">
		       <h3>ARQUIVOS</h3>
		       <li class="active"><a href="#">July 2014</a></li>
		       <li><a href="#">June 2014</a></li>
		       <li><a href="#">May 2014</a></li>
		     </div>
		   </div>
       <div class="clearfix"></div>
     </div>
     </div>
     </div>

<!--fotter-->
<?php
include 'footer.php';
?>
<!---fotter/-->


</body>
</html>
