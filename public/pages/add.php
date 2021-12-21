
<?php
    include_once("includes/header.php");
?>
    <link rel="stylesheet" type="text/css" href="../assets/style/add.css"/><!--estilo da pagina--->
    <div class="add-container">
      <div class='add-form'>
          <form enctype="multipart/form-data" method="post" action="../../classes/excursao.class.php">
             <div>
             <div class='formgroup'>
                <label for="tour-number">Numero da turn&ecirc;</label><br>
                <input type='text' placeholder='Numero da turne' name='tour-number' id='tour-number' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-name">Nome da turn&ecirc;</label><br>
                <input type='text' placeholder='Nome da turne' name='tour-name' id='tour-name' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-price">Pre&ccedil;o</label><br>
                <input type='number' placeholder='Preco' name='tour-price' id='tour-price' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-car-type">Tipo de carro</label><br>
                <select name="tour-car-type" id='tour-car-type'>
                    <option value='Minibus'>Minibus</option>
                    <option value='Bus'>Bus</option>
                    <option value='Autocarro'>Autocar</option>
                    <option value='Desconhecido'>Other</option>
                </select>
             </div>

             <div class='formgroup'>
                <label for="tour-driven">Dirigida</label><br>
                <select name="tour-driven" id='tour-driven'>
                    <option value='1'>Sim</option>
                    <option value='0'>N&atilde;o</option>
                </select>
             </div>
             
             <div class='formgroup'>
                <label for="tour-guide">Guia</label><br>
                <input type='text' placeholder='Nome do Guia' name='tour-guide' id='tour-guide'/>
             </div>

             </div>
             <div class='formgroup'>
                <label for="tour-driver">Motorista</label><br>
                <input type='text' placeholder='Nome do motorista' name='tour-driver' id='tour-driver' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-car-id">Matricula</label><br>
                <input type='text' placeholder='Matricula' name='tour-car-id' id='tour-car-id' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-car-banches">Numero de acentos</label><br>
                <input type='number' max=100 min=2 placeholder='Numero de acentos' name='tour-car-banches' id='tour-car-banches' required title="campo obrigatorio"/>
             </div>
    
             <div class='formgroup'>
                <label for="tour-image">Imagem de amostra</label><br>
                <input type='file'  name='tour-image' id='tour-image' required title="campo obrigatorio"/>
             </div>

             <div class='formgroup'>
                <label for="tour-images">Imagem de amostra</label><br>
                <input type='file'  name='tour-images[]' id='tour-images' multiple/>
             </div>
             <button type='submit' class='btnsend'>Terminar</button>
          </form>
      </div>
    </div>

<?php
    include_once("includes/footer.php");
?>