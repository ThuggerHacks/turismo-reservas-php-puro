<?php

session_start();
require("../config/connection/Connection.php");
require_once("Model.class.php");

if(!isset($_REQUEST['id'])){
    header("location:../public");
    exit;
}

$id = base64_decode($_REQUEST['id']);

$apagar = new Model();
$apagar->setTour_id($id);

//delete main image
foreach($apagar->get_excursao($id) as $imgs){
    if(file_exists("../public/assets/files/".$imgs['imagem'])){
        unlink("../public/assets/files/".$imgs['imagem']);
    }
}

//delete images
foreach($apagar->get_galeria() as $imgs){
    if(file_exists("../public/assets/files/".$imgs['foto'])){
        unlink("../public/assets/files/".$imgs['foto']);
    }
}
$apagar->delete_reserva();
$apagar->delete_excursao();

header("location:../public/pages/excursao.php");