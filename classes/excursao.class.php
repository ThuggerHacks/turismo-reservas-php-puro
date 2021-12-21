<?php

require("../config/connection/Connection.php");
     require_once("Model.class.php");
     require_once("../config/helpers/adm.helper.php");
     session_start();
     ob_start();

     $tour_number = isset($_REQUEST['tour-number'])?$_REQUEST['tour-number']:"";
     $tour_name = isset($_REQUEST['tour-name'])?$_REQUEST['tour-name']:"";
     $tour_price = isset($_REQUEST['tour-price'])?$_REQUEST['tour-price']:"";
     $tour_car_type = isset($_REQUEST['tour-car-type'])?$_REQUEST['tour-car-type']:"";
     $tour_driven = isset($_REQUEST['tour-driven'])?$_REQUEST['tour-driven']:"";
     $tour_guide = isset($_REQUEST['tour-number'])?$_REQUEST['tour-number']:"";
     $tour_driver = isset($_REQUEST['tour-driver'])?$_REQUEST['tour-driver']:"";
     $tour_car_id = isset($_REQUEST['tour-car-id'])?$_REQUEST['tour-car-id']:"";
     $tour_car_banches = isset($_REQUEST['tour-car-banches'])?$_REQUEST['tour-car-banches']:"";
     $tour_image = isset($_FILES['tour-image'])?$_FILES['tour-image']:"";
     $tour_images = isset($_FILES['tour-images'])?$_FILES['tour-images']:"";

     foreach(getAdms() as $adm){
          if($adm == $_SESSION['email']){
               $model = new Model();
               $model->setTour_name($tour_name);
               $model->setTour_number($tour_number);
               $model->setTour_price($tour_price);
               $model->setTour_car($tour_car_type);
               $model->setTour_driven($tour_driven);
               $model->setTour_driver($tour_driver);
               $model->setTour_car_id($tour_car_id);
               $model->setTour_car_banches($tour_car_banches);
               $model->setGuide($tour_guide);
              
               $i = rand(0,9999);

               if(file_exists("../public/assets/files/".$tour_image['name'])){
                    move_uploaded_file($tour_image['tmp_name'],"../public/assets/files/".$i."".$tour_image['name']);
                    $model->setImage($i."".$tour_image['name']);
               }else{
                    move_uploaded_file($tour_image['tmp_name'],"../public/assets/files/".$tour_image['name']);
                    $model->setImage($tour_image['name']);
               }
               $model->add();

               for($i = 0; $i<=count($tour_images);$i++){
                   if($tour_images['name'][$i]!=""){
                        
                         
                         if(file_exists("../public/assets/files/".$tour_images['name'][$i])){
                              $rand = rand(0,9999);
                              move_uploaded_file($tour_images['tmp_name'][$i],"../public/assets/files/".$rand."".$tour_images['name'][$i]);
                              $model->setImages($rand."".$tour_images['name'][$i]);
                         }else{
                              move_uploaded_file($tour_images['tmp_name'][$i],"../public/assets/files/".$tour_images['name'][$i]);
                              $model->setImages($tour_images['name'][$i]);
                         }


                         $model->add_galery();
                   }
                    
               }
               
               header("location:../public/pages/excursao.php");


               break;
          }
     }