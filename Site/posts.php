<?php
  require_once 'funcoes.php';

 ?>
<div class="content-grids">
<div class="banner-links">
  <ul>
    <li class="active"><a href="index.php">HISTÓRIAS</a></li>
    <li><a href="planejar.php">PLANEJE SUA VIAGEM</a></li>
    <li><a href="melhoresh.php">MELHORES HOTÉIS</a></li>
    <li style = align: "right"><a><?php retornaHoraAtual()?></a></li>
    <div class="clearfix"></div>
  </ul>
</div>
</div>
<!---//End-banner---->
<div class="content">
<div class="container">
<div class="content-grids">
  <div class="col-md-8 content-main">
    <div class="content-grid">
      <div class="content-grid-head">
        <h3>POST DO DIA</h3>
        <h4>July 24, 2014,Posted by: <a href="id=64">Admin</a></h4>
        <div class="clearfix"></div>
      </div>
      <div class="content-grid-info">
        <h3><a href="single.php">MORBI IN SEM QUIS DUI</a></h3>
        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
        <img src="images/c1.jpg" alt=""/>
        <a class="bttn" href="single.php">MORE</a> <!--chamando cada noticia do blog-->
     </div>
    </div>

    <div class="content-grid-sec">
      <div class="content-sec-info">
          <h3><a href="single.php">ALIQUAM TINCIDUNT MAURI</a></h3>
          <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
          <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
          <img src="images/c2.jpg" alt=""/>
          <a class="bttn" href="single.php">MORE</a>
      </div>
    </div>
    <div class="content-grid-sec">
      <div class="content-sec-info">
          <h3><a href="single.php">VESTIBULUM COMMODO FELIS</a></h3>
          <h4>Jul 23, 2014, Posted by : <a href="#">Admin</a></h4>
          <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat.</p>
          <img src="images/c3.jpg" alt=""/>
          <a class="bttn" href="single.php">MORE</a>
      </div>
    </div>
    <div class="pages">
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
    </div>
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
