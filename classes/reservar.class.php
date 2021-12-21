<?php
session_start();
require("../config/connection/Connection.php");
require_once("Model.class.php");


if(!isset($_REQUEST['id'])){
    header("location:../public");
    exit;
}

$id = base64_decode($_REQUEST['id']);

$model = new Model();
$model->setEmail($_SESSION['email']);
$model->setTour_id($id);
$model->reservar();
header("location:../public/pages/excursao2.php?id=".base64_encode($id));