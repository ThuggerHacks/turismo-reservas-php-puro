<?php
    require_once('includes/header.php');
    require_once('includes/header.php');
    require_once("../../classes/Model.class.php");
    require_once("../../config/helpers/adm.helper.php");

    if(!isset($_REQUEST['id'])){
        header("location:home.php");
        exit;
    }

    $id = base64_decode($_REQUEST['id']);
    $model = new Model();

    $isAdm = false;

    foreach(getAdms() as $adm){
        if($_SESSION['email']==$adm){
            $isAdm = true;
            break;
        }
    }
?>


<link rel="stylesheet" type="text/css" href="../assets/style/excursao.css"/><!--estilo da pagina--->
<link rel="stylesheet" type="text/css" href="../assets/style/excursao2.css"/><!--estilo da pagina--->


<div class="animal-container">
    
    <div class='animal-inner'>
       
        <?php
            foreach($model->get_excursao($id) as $data):
        ?>
        <div class='dv'>
        <?php
            if($isAdm){
                echo "<a href='../../classes/apagar.class.php?id=".base64_encode($data['id'])."' style='float:right;margin-right:10px;color:white;background:red;padding:4px;border-radius:5px;text-decoration:none;'>apagar esta excurs&atilde;o</a>";
            }

            if(isset($_SESSION['email']) && $_SESSION['email']!="anonymous"){
                $model->setEmail($_SESSION['email']);
                $model->setTour_id(base64_decode($_REQUEST['id']));
                if($model->get_reserva()->rowCount()>0){
                    echo "<a href='../../classes/reservar.class.php?id=".base64_encode($data['id'])."' style='float:right;margin-right:10px;color:white;background:green;padding:4px;border-radius:5px;text-decoration:none;'>Reservado</a>";
                }else{
                    echo "<a href='../../classes/reservar.class.php?id=".base64_encode($data['id'])."' style='float:right;margin-right:10px;color:white;background:green;padding:4px;border-radius:5px;text-decoration:none;'>Reservar</a>";
                }
               
            }
        ?>
            <strong>Dirigida: </strong><span><?php echo $data['dirigida']==1?"sim":"n&atilde;o" ?></span><br>
            <strong>Nome do guia: </strong><span><?= $data['guia']?></span><br>
            <strong>Carro: </strong> <span><?= $data['carro_turne'] ?></span><br>
            <strong>Motorista: </strong><span><?= $data['motorista_turne']?></span><br>
            <strong>Matricula: </strong><span><?= $data['matricula']?></span><br>
            <strong>Numero de acentos: </strong><span><?= $data['numero_acentos']?></span><br>
        </div>
        <?php
            endforeach;
        ?>
        <div >
            <h2>Reservas</h2><br>
            <div class="users">
                <table>
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Sexo</th>
                            <th>Passaporte</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $model->setTour_id(base64_decode($_REQUEST['id']));
                            foreach($model->get_reservas() as $data):
                                $model->setEmail($data['email']);
                                foreach($model->get_user_by_email() as $linha):
                                    $time = localtime($data['data_turne'],true);
                        ?>
                        <tr>
                            <td><?= $linha['nome']?></td>
                            <td><?= $linha['gender']?></td>
                            <td><?= $linha['passaporte'] ?></td>
                            <td><?=$time['tm_mday']."-".$time['tm_mon']."-".($time['tm_year']+1900) ?></td>
                        </tr>
                        <?php
                                endforeach;
                            endforeach;
                        ?>

                        
                    </tbody>
                </table>
            </div>
            
        </div><br>
        <div>
            <h2>Galeria</h2><br>
            <div class="galery-area">
                <?php
                    $model->setTour_id($id);

                    foreach($model->get_galeria() as $galery):
                ?>
                <div class='animal-card'><!------card start---->
                    <div class='animal-card-header' onclick="zoom('<?= '../assets/files/'.$galery['foto']?>')">
                        <img src='<?= '../assets/files/'.$galery['foto']?>'/>
                    </div>
                </div><!-----card end---->
                <?php
                    endforeach;
                ?>
            </div>
        </div>
        
    </div>
    
</div>

<script src='../assets/javascript/excursao2.js'></script>



<?php

    require_once("includes/footer.php");
?>    