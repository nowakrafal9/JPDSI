<?php
    class Messages {
        private $errors = array();
        
        public function addError($message){
            $this->errors[] = $message;
        }
        
        public function isError(){
            return count($this->errors)>0;
        }
        
        public function getErrors(){
            return $this->errors;
        }
        
        public function clear(){
            $this->errors = array();
        }
    }
