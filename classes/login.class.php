<?php 
session_start();
require("../config/connection/Connection.php");
require_once("Model.class.php");

    
$email = isset($_REQUEST['email'])?$_REQUEST['email']:"";
$senha = isset($_REQUEST['senha'])?$_REQUEST['senha']:"";

if(trim($senha)!="" && trim($email)!=""){
    $login = new Model();
    $login->setEmail($email);
    $login->setPassword(md5($senha));
    
    if($login->login()->rowCount()>0){
        $_SESSION['email'] = $email;
        header("location:../public/pages/home.php");
    }else{
        echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >Conta n&atilde;o existe</h1><br><a href='../public/pages/login.php'>Voltar</a></div>";
    }
}else{
    echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >Dados de login incorretos</h1><br><a href='../public/pages/login.php'>Voltar</a></div>";
}