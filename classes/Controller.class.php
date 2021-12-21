<?php

    class Controller extends Connection {
        private $tour_name;
        private $tour_number;
        private $tour_id;        
        private $tour_price;
        private $tour_car;
        private $tour_driven;
        private $tour_driver;
        private $tour_car_id;
        private $tour_car_banches;
        private $password;
        private $username;
        private $email;
        private $passport;
        private $user_id;
        private $date;
        private $gender;
        private $image;
        private $guide;
        private $images;

        public function getImages(){
            return $this->images;
        }

        public function  getGuide(){
            return $this->guide;
        }

        public function getImage(){
            return $this->image;
        }
        
        public function getGender(){
            return $this->gender;
        }

        public function getTour_name() {
            return $this->tour_name;
        }

        public function getTour_number() {
            return $this->tour_number;
        }

        public function getTour_id() {
            return $this->tour_id;
        }

        public function getTour_price() {
            return $this->tour_price;
        }

        public function getTour_car() {
            return $this->tour_car;
        }

        public function getTour_driven() {
            return $this->tour_driven;
        }

        public function getTour_driver() {
            return $this->tour_driver;
        }

        public function getTour_car_id() {
            return $this->tour_car_id;
        }

        public function getTour_car_banches() {
            return $this->tour_car_banches;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getUsername() {
            return $this->username;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassport() {
            return $this->passport;
        }

        public function getUser_id() {
            return $this->user_id;
        }

        public function getDate() {
            return $this->date;
        }

        public function setTour_name($tour_name){
            $this->tour_name = $tour_name;
        }

        public function setTour_number($tour_number){
            $this->tour_number = $tour_number;
        }

        public function setTour_id($tour_id) {
            $this->tour_id = $tour_id;
        }

        public function setTour_price($tour_price)  {
            $this->tour_price = $tour_price;
        }

        public function setTour_car($tour_car)  {
            $this->tour_car = $tour_car;
        }

        public function setTour_driven($tour_driven)  {
            $this->tour_driven = $tour_driven;
        }

        public function setTour_driver($tour_driver)  {
            $this->tour_driver = $tour_driver;
        }

        public function setTour_car_id($tour_car_id)  {
            $this->tour_car_id = $tour_car_id;
        }

        public function setTour_car_banches($tour_car_banches)  {
            $this->tour_car_banches = $tour_car_banches;
        }

        public function setPassword($password)  {
            $this->password = $password;
        }

        public function setUsername($username)  {
            $this->username = $username;
        }

        public function setEmail($email)  {
            $this->email = $email;
        }

        public function setPassport($passport)  {
            $this->passport = $passport;
        }

        public function setUser_id($user_id)  {
            $this->user_id = $user_id;
        }

        public function setDate($date)  {
            $this->date = $date;
        }

        public function setGender($gender){
            $this->gender = $gender;
        }

        public function setImage($image){
            $this->image = $image;
        }

        public function setGuide($guide){
            $this->guide = $guide;
        }

        public function setImages($image){
            $this->images = $image;
        }
    }

    ?>