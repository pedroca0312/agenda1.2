<html>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Calendário Dinâmico com PHP + FullCalendar </title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>

    <script src='fullcalendar/fullcalendar.js'></script>

    <script src='fullcalendar/locale/pt-br.js'></script>
        
    <script>
       $(document).ready(function() {   

            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,listWeek'
                },

                defaultDate: Date.now(),
                editable: true,
                eventLimit: true, 
                events: 'eventos.php',           
                eventColor: '#324edd',
                defaultView: 'listDay',
                themeSystem: 'bootstrap4'

            });

           $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {   
                        /*if(1 == 1){
                            alert("Cadastrado com sucesso! ");
                            //atualiza a página!
                            location.reload();
                        }else{
                            alert("Houve algum problema.. ");
                        }
                   */ }
                });                
                return false;
            }); 
       }); 

    </script>
    
    <style>
        #calendario{
            position: relative;
            width: 70%;
            margin: 0px auto;
        }

        #CadastrarAtividade{

        }
    </style>
    
</head>
<body>
    <div id='calendario'></div>
    
        <div id=CadastrarAtividade>
            <a href="../controlador/atividade.php?acao=cadastrar"><button name="Cadastrar" type="submit" class="btn btn-primary btn-lg">Cadastrar Atividade</button></a>
            <br> <br>

    <div id=CadastrarAtividade>
        <a href="../controlador/atividade.php?acao=listar"><button name="Lista" type="submit" class="btn btn-primary btn-lg">Lista de Atividades</button></a>
        <br> <br>
    </div>

            <div id=CadastrarAtividade>
                <a href="../controlador/usuario.php?acao=listar"><button name="ListaUsuario" type="submit" class="btn btn-primary btn-lg">Lista de Usuario</button></a>
                <br> <br>
            </div>
     
</body>
</html>

