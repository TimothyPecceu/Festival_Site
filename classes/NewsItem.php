<?php
    class NewsItem{
        
        private $id;
        private $title;
        private $text;
        private $image;
        private $date;
        
        private function __construct(){
        }
        
        public function create(){
            $instance = new self();
            return $instance;
        }
        
        public function setId($id){
            $this->id = $id;
            return $this;
        }
        
        public function setTitle($title){
            $this->title = $title;
            return $this;
        }
        
        public function setText($text){
            $this->text = $text;
            return $this;
        }
        
        public function setImage($image){
            $this->image = $image;
            return $this;
        }
        
        public function setDate($date){
            $this->date = $date;
            return $this;
        }
        
        public function getTitle(){
            return $this->title;
        }
        
        public function getText(){
           return $this->text;
        }
        
        public function getImage(){
            return $this->image;
        }
        
        public function getDate(){
            return $this->date;
        }
    }


