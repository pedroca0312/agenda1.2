<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_lista_atividade&usuario.css); </style>
</head>
    <body>
    <h1 class="atividade">Lista de Atividades</h1>
    <div class="lista_atividades">
    <?php foreach ($atividades as $atividade): ?>

        <ul>
           <li><?= $atividade->getDescricao();?> <a href="../controlador/atividade.php?acao=editar&id=<?= $atividade->getIdAtividade();?>"><button class="btn btn-primary btn-lg">Editar</button></a>

             <a href="../controlador/atividade.php?acao=deletar&id=<?= $atividade->getIdAtividade();?>"><button class="btn btn-primary btn-lg">Excluir</button></a></li>
        </ul>

            <?php endforeach;?>
    </div>





    </body>
</html>