<?php

    session_start();

    if(isset($_REQUEST['a'])){
        session_destroy();
        header("location:login.php");
    }
    
    if(isset($_SESSION['email']) && $_SESSION['email']!="anonymous"){
        echo "<div style='margin:10px auto;padding:10px;border:1px solid #ebebebeb;text-align:center'><h1>Continuar como: {$_SESSION['email']} ?</h1><br><a href='home.php'>sim</a> <a href='login.php?a=1'>n&atilde;o</a></div>";
        exit;

    }

   


?>
<link rel="stylesheet" type="text/css" href="../assets/style/login.css"/>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style/header.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/style/geral.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/style/footer.css"/>
    <title>Turismo</title>
</head>

<div class="login">
  
    <form method="post" action="../../classes/login.class.php">
        <h2>LOGIN</h2><br>
        <a href='home.php' style="margin-bottom:20px;float:right">pular login</a><br>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="email"/>
        </div>

        <div class="form-group">
            <label for="password">Senha</label><br>
            <input type="password" name="senha" id="password" placeholder="senha"/>
        </div>
        <div class="form-group">
            <input type="submit" value="entrar"/>
        </div><br>
        <span>N&atilde;o tem conta? <a href='signin.php'>Registar</a></span>
    </form>
</div>