<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_edita_atividade.css); </style>
</head>
    <body>
    <h1>Editar Atividade</h1>
    <form method="post" action="" class="formularios">

        <input class="form-control inputLogin" name="descricao" type="text" value="<?= $atividade->getDescricao();?>"><br> <br>

        <input class="form-control inputLogin" name="data_previsao" type="text" value="<?= $atividade->getDataPrevisao();?>"> <br>

        <input class="btn btn-primary btn-lg" name="id_atividade" type="hidden" value="<?= $atividade->getIdAtividade();?>"> <br>

        <a href="../controlador/atividade.php?acao=editar"><button type="submit" name="edita" class="btn btn-primary btn-lg">Editar</button></a>

    </form>
    </body>
</html>


