
<!DOCTYPE HTML>
<html>
<head>
	<title>Blogname a Blogging Category Flat Bootstarp  Responsive Web Template | Home :: w3layouts</title>
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

</head>
<body>
<!---strat-banner---->
<?php require_once 'header.php';


 ?>

<div class="container">
	<div class="banner-head">
		<h1>Lorem ipsum dolor sit amet</h1>
		<h2>cliquam tincidunt mauris</h2>
	</div>

<div class="banner-links">
  <ul>
    <li class="active"><a href="index.php">HISTÓRIAS</a></li>
    <li><a href="planejar.php">PLANEJE SUA VIAGEM</a></li>
    <li><a href="melhoresh.php">MELHORES HOTÉIS</a></li>
    <div class="clearfix"></div>
  </ul>
</div>
<!---//End-banner---->
<div class="content">
	 <div class="container">
		 <div class="content-grids">
			 <div class="col-md-8 content-main">
				 <div class="content-grid">
					 <div class="content-grid-head">
						 <h3>POST OF THE DAY</h3>
						 <h4><?php echo "Última Modificação: " .date("F d Y ", getlastmod());?> <a href="#">Admin</a></h4>
						 <div class="clearfix"></div>
					 </div>
					 <div class="content-grid-single">
						 <h3>MORBI IN SEM QUIS DUI</h3>
						 <span>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</span>
						 <img class="single-pic" src="images/c1.jpg" alt=""/>
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
						 Nullam a efficitur odio, ac maximus lorem. Nullam aliquam fermentum lectus ut sagittis. Sed pulvinar sed ligula gravida condimentum. Proin eleifend vestibulum tortor, ut pellentesque lorem tempor a. Nunc pharetra lacus at laoreet suscipit. Aliquam tempor mattis sagittis. Mauris viverra mi quis risus molestie placerat. Sed accumsan vestibulum fringilla. Etiam dapibus tellus ac eros placerat, at aliquam arcu lobortis. Vestibulum sollicitudin mauris dui, a tempor metus lacinia sed. Nam a auctor purus, nec rutrum ipsum.
						 Maecenas lacus ex, finibus non tempor at, ultrices id sem. Suspendisse et magna et tellus facilisis lacinia at et diam. Fusce finibus ullamcorper ligula non tristique. Nulla facilisi. Donec ultricies nisi vel quam venenatis efficitur. Praesent porta risus arcu, at egestas ante accumsan eu. Phasellus et lacus quis lacus imperdiet fermentum eu a enim. Praesent non lorem rhoncus, cursus leo nec, pellentesque dui.</p>

						 <div class="content-form">
							 <h3>Deixe um comentário</h3>
							 <form class="" name="submit" action="comentarios.php" method="GET"> <!--Passar para o banco-->
							 <input type="text" name="nome" placeholder="Nome" required/>
							 <input type="text" name= "email" placeholder="E-mail" required/>
							 <input type="text" name="telefone" placeholder="Telefone" required/>
							 <textarea name="mensagem" placeholder="Mensagem"></textarea>
							 <input class="btn btn-primary" type="submit" value="ENVIAR"/>
							 </form>
						 </div>
						 <div class="commentarios">
							 <h3>Comentarios</h3>

							 <div class="comment-grid">

								 <img src="images/pic.png" alt=""/>
								 <div class="comment-info">
									 <?php $exibir = buscaDados($conn);?>
								 <h4><?php if ($_GET['nome']) echo $exibir['nome'];  ?></h4>
								 <p><?php  if ($_GET['mensagem']) echo $exibir['mensagem']; ?></p>
								 <h5><?php if ($_GET['data']) echo $exibir['data'];  ?></h5>
								 <a href="#">Responder</a>
								 </div>
								 <div class="clearfix"></div>
							 </div>
							 <div class="pagina">
									<ul>
									 <li class="active"><a href="#">1</a></li>
									 <li><a href="#">2</a></li>
									 <li><a href="#">3</a></li>
									 <li><a href="#">4</a></li>
									 <li><a href="#">5</a></li>
									 <li><a href="#">6</a></li>
									 <li><a href="#">Previous</a></li>
									 <li><a href="#">Next</a></li>
									</ul>
									<form class="" action="index.html" >

							 </div>
						</div>
					  </div>

				 </div>
			 </div>

			 <div class="col-md-4 content-main-right">
				 <div class="search">
						 <h3>SEARCH HERE</h3>
						<form>
							<input type="text" value="" onfocus="this.value=''" onblur="this.value=''">
							<input type="submit" value="">
						</form>
				 </div>
				 <div class="categories">
					 <h3>CATEGORIES</h3>
					 <li class="active"><a href="#">Donec quis dui at dolor tempor</a></li>
					 <li><a href="#">Vestibulum commodo felis quis tort</a></li>
					 <li><a href="#">Fusce pellentesque suscipit</a></li>
				 </div>
				 <div class="archives">
					 <h3>ARCHIVES</h3>
					 <li class="active"><a href="#">July 2014</a></li>
					 <li><a href="#">June 2014</a></li>
					 <li><a href="#">May 2014</a></li>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>

<?php include("footer.php") ?>


</body>
</html>
