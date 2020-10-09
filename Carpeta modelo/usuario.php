<?php
    include_once "persona.php";
    class cliente extends persona
    {
        private $login;
        private $password;

        public function setLogin($login)
        {
            $this->login = $login;
        }
        public function getLogin()
        {
            return $this->login;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function getPassword()
        {
            return $this->password;
        }
        public function __construct($login,$password)
        {
            $this->login=$login;
            $this->password=$password;
        }
        function __toString(){
            $login=$this->getLogin();
            $password=$this->getPassword();
            $mensajeRet="Persona:[$login,$password]";
            return $mensajeRet;   
        }
    }

    ?>