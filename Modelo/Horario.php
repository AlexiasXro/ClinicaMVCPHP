<?php
    class Horario{
        private $id;
        private $descripcion;
        private $orden;

        
        public function __construct()
        {   
            $this->setId(0);
            $this->setDescripcion("");
            $this->setOrden(0);
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
         * Get the value of descipcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descipcion
         *
         * @return  self
         */ 
        public function setDescripcion($descipcion)
        {
                $this->descripcion = $descipcion;

                return $this;
        }

        /**
         * Get the value of orden
         */ 
        public function getOrden()
        {
                return $this->orden;
        }

        /**
         * Set the value of orden
         *
         * @return  self
         */ 
        public function setOrden($orden)
        {
                $this->orden = $orden;

                return $this;
        }
    }