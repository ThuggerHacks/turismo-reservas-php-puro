<?php
    session_start();

    if(!isset($_SESSION['email'])){
        $_SESSION['email'] = "anonymous";
    }
    require("../../config/connection/Connection.php");
    require_once("../../config/helpers/adm.helper.php");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style/header.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/style/geral.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/style/footer.css"/>
    <title>Turismo</title>
</head>
<body>
    <nav class="navbar"><!-------------inicio da nav bar-------->
        <div class="logo-container"><!------------inicio do logotipo------>
            <a class="navbar-logo" href="home.php"><span class="zoo">TURI</span><span class="logico">SMO</span></a>
            <span class="logo-info">Seja muito bem-vindo ao nosso site</span>
        </div><!--------fim do logotipo--------------------->
        <div class="menu-btn"><!-------------mobile button de menu----------->
            <img src="../assets/pictures/menus/menu-svgrepo-com (1).svg">
        </div><!-----------------fim button--------------------->
        <div><!-----------------container de links do menu--------------------->
             <ul class="navbar-ul">
                 <div class="navbar-close">&times;</div>
                <li class="navbar-li">
                    <div>
                        <a class="navbar-link" href="home.php">Inicio</a>
                    </div>
                </li>
               
                <li class="navbar-li">
                    <div>
                        <a class="navbar-link" href="../pages/excursao.php">Excurs&ccedil;&otilde;es</a>
                    </div>
                    
                </li>
                <?php
                    foreach(getAdms() as $adm):
                        if(strtolower($adm) == strtolower($_SESSION['email'])):
                ?>
                <li class="navbar-li">
                    <div>
                         <a class="navbar-link" href="add.php">Adicionar excurs&atilde;o</a>
                    </div>
                   
                </li>
                <?php
                            break;
                        endif;
                    endforeach;
                ?>
             </ul>
        </div><!-------------------fim containers---------------->
       
    </nav><!---------fim da nav-------------------->
