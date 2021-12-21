<?php
    include_once('includes/header.php');
?>

  <link rel="stylesheet" type="text/css" href="../assets/style/feedback.css"/><!--estilo da pagina--->
<div class='feedback-container'>
    <div class='feedback-area'>
        <section class='sec-1'><!-------seccao-1----->
            <div><!-------imagem e titulo------>
                <h2 class='feedback-title'>Como encontrar-nos</h2><br>
                <div class='location' ></div>
            </div><!------end-------------->
            <div class='sec-1-container'>
                <div class='company-info'><!-------informacao da empresa------->
                    <small>Beira,Maquinino</small><br>
                    <small>
                        <strong>Telefone: </strong>
                        <span>+258848499142</span>
                    </small><br>
                    <small>
                        <strong>Fax: </strong>
                        <span>+258848499142</span>
                    </small><br>
                    <small>
                        <strong>Email: </strong>
                        <span>zoologico@gmail.com</span>
                    </small>
                </div>
            </div><!------end informacao da empresa----->
        </section><!-----end seccao-1----------->

        <section class='sec-2'><!-------seccao-2----->
            <h2 class='feedback-title'>Feedback</h2>
           <form >
               <input type='text' placeholder='nome'/><br>
               <input type='email' placeholder='email' required/><br>
               <input type='tel' placeholder='telefone'/><br>
               <textarea placeholder="mensagem"></textarea><br>
               <div class='form-btns'>
                 <input type='reset' value='limpar' class='more'/>
                 <input type='submit' value='enviar' class='more'/>
               </div>
           </form>
        </section><!-----end seccao-2----------->
    </div>
</div>



<?php
    include_once('includes/footer.php');
?>