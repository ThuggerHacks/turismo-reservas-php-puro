
<?php

    
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
  
    <form method="post" action="../../classes/signin.class.php">
        <h2>REGISTAR</h2><br>
        <div class="form-group">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="email"/>
        </div>
        <div class="form-group">
            <label for="name">Nome</label><br>
            <input type="text" name="name" id="name" placeholder="Nome"/>
        </div>

        <div class="form-group">
            <label for="password">Senha</label><br>
            <input type="password" name="senha" id="password" placeholder="senha"/>
        </div>
        <div class="form-group">
            <label for="password2">Confirmar senha</label><br>
            <input type="password" name="senha2" id="password2" placeholder="confirmar senha"/>
        </div>
        <div class="form-group">
            <label for="passaport">Passaporte</label><br>
            <input type="text" name="passaporte" id="passaport" placeholder="Passaporte"/>
        </div>
        <div class="form-group">
            <fieldset>
                <legend>Sexo: </legend>
                <input type="radio" name="gender" id="masc"  value="masculino" checked />
                <label for="masc">Masculino</label>
                <br>
                <input type="radio" name="gender" id="fem" value="femenino"/>
                <label for="fem">Femenino</label>
            </fieldset>
           
        </div>
        <div class="form-group">
            <input type="submit" value="salvar"/>
        </div><br>
        <span>Ja tem conta? <a href='login.php'>Entrar</a></span>

    </form>
</div>