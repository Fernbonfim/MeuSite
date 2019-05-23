<?php include ("conecta.php");


 $nome = isset($_GET['nome']) ?  $_GET['nome'] : '';
 $email = isset($_GET['email']) ?  $_GET['email'] : '';
 $telefone = isset($_GET['telefone']) ?  $_GET['telefone'] : '';
 $data = isset($_GET['data']) ?  date("Y") : '';
 $mensagem = isset($_GET['mensagem']) ?  $_GET['mensagem'] : '';

 $insert = "INSERT INTO bdcomentario (nome, email, telefone, data, mensagem) VALUES ('$nome', '$email', $telefone, '$data', '$mensagem')";

 if (mysqli_query($conn, $insert)) {

       header("location: single.php");
        ?>
          <p class="text-danger"> Comentario adicionado!</p>
        <?php
       die('Não ignore meu cabeçalho...');
 } else {

 }


  //buscando os comentarios no BD
  function buscaDados($conn){

    $exibir = array();

    $sql = "SELECT *FROM bdcomentario ORDER BY id desc";
    $resultado = mysqli_query($conn, $sql);
    return mysqli_fetch_assoc($resultado);

    //   $nome = $exibir["nome"];
    //   echo "</br>";
    //   $email = $exibir['email'];  isso aqui é so para ver se esta tudo funcionando
    //   echo "</br>";
    //   $telefone = $exibir['telefone'];
    //   echo "</br>";
    //   $mensagem = $exibir['mensagem'];
    //   echo "</br>";
    // }
  }
mysqli_close($conn);
?>




<!-- <script type="text/javascript">
function stopDefAction(evt) {
    evt.preventDefault();

    document.getElementById('my-checkbox').addEventListener(
    'click', stopDefAction, false
);
};
</script> -->



<!-- <script type="text/javascript">
function stopDefAction(evt) {
    evt.preventDefault();

    document.getElementById('my-checkbox').addEventListener(
    'click', stopDefAction, false
);
};
</script> -->
