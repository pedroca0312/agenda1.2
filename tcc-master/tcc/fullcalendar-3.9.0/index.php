

<html>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Calendário Dinâmico com PHP + FullCalendar </title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bootstrap-4.1.0-dist/css/bootstrap-grid.min.css">
    <script type="text/javascript" src="../bootstrap-4.1.0-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />

    <link rel="stylesheet" href="../css/calendario.css">


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
                themeSystem: 'bootstrap4',
                themeName: 'cyborg'


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
            position: absolute;
            width: 70%;
            margin-top: 0px;
            margin-left:  20%;*/

        }
        /*#direita{*/

            /*margin-left:30%;*/
        /*}*/
        /*#esquerda{*/
            /*margin-right: 70%;*/
        /*}*/


    </style>
    
</head>
<body>

<div id="direita" class="direita-calendar">
    <div id='calendario'></div>
</div>
<div id="esquerda" class="esquerda-cabecalho">
    <?php include "../views/cabecalho.php";?>
</div>

    

</body>
</html>



