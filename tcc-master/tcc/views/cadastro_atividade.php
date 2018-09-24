<?php

    @session_start();

    if (!isset($_SESSION['esta_logado']) || $_SESSION['esta_logado'] != true){
        header("location: http://www.google.com");
    }

?>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_cadastro_atividade.css); </style>

</head>
<body>

<h1>bem vindo <?= $_SESSION['username'] ?></h1>

<form action="" method="post">

    <div class="tudo">
    <h1>Cadastro de atividade</h1> <br><br>

  <div id="descricao">

      <input type="text" class="form-control inputLogin" name="descricao" placeholder="Nome da Atividade" > <br><br>

  </div>

  <div id="data_previsao">

      <input type="date" class="form-control inputLogin" name="data_previsao" ><br><br>

  </div>

  <div id="botao">

        <button name="botao" type="submit" class="btn btn-primary btn-lg">Cadastrar atividade</button> <br> <br>

  </div>
  </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      </form>
</body>
</html>