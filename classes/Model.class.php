<?php

require_once("Controller.class.php");

    class Model extends Controller {

        public function get_user_by_email(){
            $con = $this->connect();
            $sql = "SELECT*FROM users WHERE email = ?";
            $motor = $con->prepare($sql);
            $motor->bindValue(1,$this->getEmail(),PDO::PARAM_STR);
            $motor->execute();

            return $motor;
        }


        public function register_user(){
            $con = $this->connect();
            $sql = "INSERT INTO users (nome,senha,passaporte,email,gender) VALUES(?,?,?,?,?)";
            $motor = $con->prepare($sql);
            $motor->bindValue(1,filter_var($this->getUsername(),FILTER_SANITIZE_SPECIAL_CHARS),PDO::PARAM_STR);
            $motor->bindValue(2,filter_var($this->getPassword(),FILTER_SANITIZE_SPECIAL_CHARS),PDO::PARAM_STR);
            $motor->bindValue(3,filter_var($this->getPassport(),FILTER_SANITIZE_SPECIAL_CHARS),PDO::PARAM_STR);
            $motor->bindValue(4,filter_var($this->getEmail(),FILTER_SANITIZE_SPECIAL_CHARS),PDO::PARAM_STR);
            $motor->bindValue(5,filter_var($this->getGender(),FILTER_SANITIZE_SPECIAL_CHARS),PDO::PARAM_STR);
            $motor->execute();

        }


        public function login(){
            $con = $this->connect();
            $sql = "SELECT*FROM users WHERE email = ? AND senha = ?";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->getEmail(),
                $this->getPassword()
            ]);

            return $motor;
        }

        public function add(){
            $con = $this->connect();
            $sql = "INSERT INTO excursao (numero_turne,nome_turne,preco_turne,carro_turne,dirigida,motorista_turne,matricula,numero_acentos,imagem,guia,data) VALUES(?,?,?,?,?,?,?,?,?,?,?)";

            $motor = $con->prepare($sql);
            $motor->execute(array(
                $this->getTour_number(),
                $this->getTour_name(),
                $this->getTour_price(),
                $this->getTour_car(),
                $this->getTour_driven(),
                $this->getTour_driver(),
                $this->getTour_car_id(),
                $this->getTour_car_banches(),
                $this->getImage(),
                $this->getGuide(),
                time()
            ));
        }
        
        public function get_max_id(){
            $con = $this->connect();
            $getId = "SELECT id FROM excursao";
            $motor = $con->prepare($getId);
            $motor->execute();
            $id = 0;
            foreach($motor as $linha){
                $id = $linha['id'];
            }

            return $id;
        }

        public function add_galery(){
            $con = $this->connect();
            $sql = "INSERT INTO galeria (id_excursao,foto) VALUES(?,?)";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->get_max_id(),
                $this->getImages()
            ]);

        }

        public function get_excursao($id){
            $con = $this->connect();
            $sql = "SELECT * FROM excursao WHERE  id = ?";
            $motor = $con->prepare($sql);
            $motor->execute([$id]);

            return $motor;
        }

        public function get_excursao_all(){
            $con = $this->connect();
            $sql = "SELECT*FROM excursao";
            $motor = $con->prepare($sql);
            $motor->execute();

            return $motor;
        }

        public function get_galeria(){
            $con = $this->connect();
            $sql = "SELECT*FROM galeria WHERE id_excursao = ?";
            $motor = $con->prepare($sql);
            $motor->execute([$this->getTour_id()]);

            return $motor;
        }

        public function delete_excursao(){
            $con = $this->connect();
            $sql = "DELETE FROM excursao WHERE id = ?";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->getTour_id()
            ]);
        }

     
        public function get_reserva(){

            $con = $this->connect();
            $sql = "SELECT*FROM reserva WHERE email = ? AND id_excursao = ?";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->getEmail(),
                $this->getTour_id()
            ]);

            return $motor;
        }

        public function reservar(){
            $con = $this->connect();

            if($this->get_reserva()->rowCount()>0){
                $sql = "DELETE FROM reserva WHERE email = ? AND id_excursao = ?";
                $motor = $con->prepare($sql);
                $motor->execute([
                    $this->getEmail(),
                    $this->getTour_id()
                ]);
            }else{
                $sql = "INSERT INTO reserva (email,id_excursao,data_turne) VALUES(?,?,?)";
                $motor = $con->prepare($sql);
                $motor->execute([
                    $this->getEmail(),
                    $this->getTour_id(),
                    time()
                ]);
            }
        }


        public function delete_reserva(){
            $con = $this->connect();
            $sql =  "DELETE FROM reserva WHERE id_excursao = ?";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->getTour_id()
            ]);
        }

        public function get_reservas(){
            $con = $this->connect();
            $sql = "SELECT*FROM reserva WHERE id_excursao = ?";
            $motor = $con->prepare($sql);
            $motor->execute([
                $this->getTour_id()
            ]);
            return $motor;

            
        }
    }
?>