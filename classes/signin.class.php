<?php

require("../config/connection/Connection.php");
 require_once("Model.class.php");
ob_start();

if($_SERVER['REQUEST_METHOD']!="POST"){
    header("location:../public");
    exit;
}
$name = isset($_REQUEST['name'])?$_REQUEST['name']:"";
$email = isset($_REQUEST['email'])?$_REQUEST['email']:"";
$senha = isset($_REQUEST['senha'])?$_REQUEST['senha']:"";
$senha2 = isset($_REQUEST['senha2'])?$_REQUEST['senha2']:"";
$passaporte = isset($_REQUEST['passaporte'])?$_REQUEST['passaporte']:"";
$gender = isset($_REQUEST['gender'])?$_REQUEST['gender']:"";


if(trim($name)!="" && trim($email)!="" &&trim($senha)!="" && trim($passaporte)!="" && trim($gender)!=""){
    if($senha==$senha2){
        $model = new Model();
        $model->setUsername($name);
        $model->setEmail($email);
        $model->setPassport($passaporte);
        $model->setPassword(md5($senha));
        $model->setGender($gender);
        
        if($model->get_user_by_email()->rowCount()>0){
            echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >Ja existe um usuario com este email</h1><br><a href='../public/pages/signin.php'>Voltar</a></div>";
        }else{
            $model->register_user();
            echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >Registado com sucesso</h1><br><a href='../public/pages/login.php'>Login</a></div>";
        }
    }else{
        echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >Senhas nao podem ser diferentes</h1><br><a href='../public/pages/signin.php'>Voltar</a></div>";
    }
}else{
    echo "<div style='border:1px solid back;text-align:center;margin:auto'><h1 >por favor preencha todos os dados</h1><br><a href='../public/pages/signin.php'>Voltar</a></div>";
}
?>