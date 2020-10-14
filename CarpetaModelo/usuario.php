<?php
    class Usuario
    {
        private $login;
        private $password;
        private $nombre;
        private $apellidos;

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
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;
        }
        public function getNombre()
        {
            return $this->nombre;
        }
        public function setApellidos($apellidos)
        {
            $this->password = $apellidos;
        }
        public function getApellidos()
        {
            return $this->apellidos;
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