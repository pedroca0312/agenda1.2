
<?php

    include "../Models/CrudAtividade.php";

    $atividades = new CrudAtividade();
    $eventos =  $atividades->GetAtividades();

    $listaEventos = [];

	foreach ($eventos as $evento){

        $eventoFormatado = [
            "title" => $evento->descricao,
            "start" => date($evento->data_previsao),

        ];

        $listaEventos[] = $eventoFormatado;

	}


	$listaEventos[] = $evento;

    echo json_encode($listaEventos);


