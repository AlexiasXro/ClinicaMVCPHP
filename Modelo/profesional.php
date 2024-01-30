<?php

    class Profesional{
        private $id;
        private $apellido;
        private $nombre;
        private $matricula;
        private $titulo_profesional;
        private $email;
        private $celular;
        private $foto;
        private $estado;


        public function __construct()
        {
            $this->setId(0);
            $this->setApellido("");
            $this->setNombre("");
            $this->setMatricula(0);
            $this->setTitulo_profesional("");
            $this->setEmail("");
            $this->setCelular("");
            $this->setFoto("");
            $this->setEstado("");
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of matricula
         */ 
        public function getMatricula()
        {
                return $this->matricula;
        }

        /**
         * Set the value of matricula
         *
         * @return  self
         */ 
        public function setMatricula($matricula)
        {
                $this->matricula = $matricula;

                return $this;
        }

        /**
         * Get the value of titulo_profesional
         */ 
        public function getTitulo_profesional()
        {
                return $this->titulo_profesional;
        }

        /**
         * Set the value of titulo_profesional
         *
         * @return  self
         */ 
        public function setTitulo_profesional($titulo_profesional)
        {
                $this->titulo_profesional = $titulo_profesional;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of celular
         */ 
        public function getCelular()
        {
                return $this->celular;
        }

        /**
         * Set the value of celular
         *
         * @return  self
         */ 
        public function setCelular($celular)
        {
                $this->celular = $celular;

                return $this;
        }

        /**
         * Get the value of foto
         */ 
        public function getFoto()
        {
                return $this->foto;
        }

        /**
         * Set the value of foto
         *
         * @return  self
         */ 
        public function setFoto($foto)
        {
                $this->foto = $foto;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }
    }

?>