<?php

  function retornaHoraAtual(){
    setlocale(LC_ALL, "pt-BR", "pt_BR.utf-8", "portuguese");

    echo ucfirst(strftime("%A, %d de %B"));


  // $dt = new DateTime();
  //
  // echo $dt->format("d/m/Y H:i:s");
  //
  // $periodo = new DateInterval("P15D"); //adiciona mais 15 dias a data atual
  //
  // $dt->add($periodo); //metodo add() acessando(adiconando) a variavel $dt
  // echo "<br>";
  //
  // echo $dt->format("d/m/Y H:i:s");
  }




 ?>
