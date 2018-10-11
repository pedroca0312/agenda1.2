<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">@import url(../css/style_login.css); </style>

</head>
<body>
<form action="?acao=verifica" method="post">

    <div id="descricao">

        <h2> Plataforma de Organização do Estudante</h2> <br> <br>
        <h3>O IF agenda é uma aplicação com intuito de auxiliar e facilitar<br>
            os estudantes na organização de seus trabalhos, atividades e provas<br>
            em uma plataforma de acesso fácil e rápido no seu dia-a-dia,<br>
            evitando atrasos na entrega de trabalhos e mantendo os alunos<br>
            informados com relação as datas das avaliações<br>
        </h3>
    </div>

    <div class="suprema">
        <img src="../../imagens/imagens/logo-1.png">
        <div class="box">
            <h1>Login</h1> <br>

            <div id="usuario">
                <input type="text" class="form-control inputLogin" name="usuario" placeholder="Usuario"> <br>
            </div>

            <div id="senha">
                <input class="form-control inputLogin" type="password" name="senha" placeholder="Senha"> <br>
            </div>

            <div id="entrar">
                <button name="gravar" type="submit" class="btn btn-primary btn-lg" >Entrar</button> <br> <br>
            </div>
            <div id="cadastro">
                <a href="?acao=cadastrar">Cadastre-se</a> <br><br>
            </div>

            <div id="esqueceu_senha">
                <a href="..">Esqueceu sua senha?</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</form>
</body>
</html>