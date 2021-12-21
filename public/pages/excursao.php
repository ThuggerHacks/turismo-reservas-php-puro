<?php
    require_once('includes/header.php');
    require_once("../../classes/Model.class.php");
    $model = new Model();
?>



<link rel="stylesheet" type="text/css" href="../assets/style/excursao.css"/><!--estilo da pagina--->

<div class="animal-container">
<!-------------------------another animal type-------------->
<?php
    $week_result = $model->get_excursao_all();
    
?>
   
    <div class="'animal-inner">
         <!-------------------------another animal type-------------->
      <?php
        $other_result = $model->get_excursao_all();
     ?>

    <div class='animal-inner'>
    <?php    
        if($week_result->rowCount()<=0){
            echo "<center><h1 style='color:white'>SEM EXCURSOES</h1></center>";
        }
        foreach($other_result as $data):
    ?>
        <div class='animal-card'><!------card start---->
            <div class='animal-card-header'>
                <img src="<?php echo "../assets/files/".$data['imagem'] ?>"/>
            </div>
            <div class='animal-card-body'>
                <span>
                <strong>Numero da turn&ecirc;: </strong><span><?= $data['numero_turne']?></span><br>
                   <strong>Nome da turn&ecirc;: </strong><span><?= $data['nome_turne']?></span><br>
                   <strong>Pre&ccedil;o:  </strong><span><?= $data['preco_turne']?></span><br>
                   <strong>Carro: </strong><span><?= $data['carro_turne']?></span>
                </span>
            </div>
            <div class='animal-card-footer'>
                <a href='<?='excursao2.php?id='.base64_encode($data['id']) ?>' class='more'>ver lista</a>
            </div>
        </div><!-----card end---->
       <?php
        endforeach;
       ?> 
    </div>
</div>



<?php

    require_once("includes/footer.php");
?>    