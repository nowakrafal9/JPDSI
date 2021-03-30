<?php
    namespace app\transfer;

    class User {
        public $login;
        public $role;
        
        public function _construct($login, $role){
            $this->login = $login;
            $this->role = $role;
        }
    }
