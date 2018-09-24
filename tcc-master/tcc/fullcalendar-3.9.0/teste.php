<?php

include "../Models/CrudAtividade.php";


$crud = new CrudAtividade();

var_dump($crud->GetAtividades());