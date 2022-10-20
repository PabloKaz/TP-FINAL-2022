<?php
   namespace Models ;

    abstract class User{
        private $id;
        //Hacer el id autoincremental dentro del construct y sacarlo de los parametros
        /**Pregunto porque cuando voy a crear un nuevo owner tengo el atributo id que no se como llenarlo */
        //Agregar Email en user podria ser mejor porque tanto owner como keeper lo requieren
        private $nombreUser;
        private $contrasena;
        private $tipodeCuenta ;

        public function __construct($id, $nombreUser, $contrasena ){
                $this->id = $id ;
                $this->nombreUser = $nombreUser ;
                $this->contrasena = $contrasena ;

        }
        
        public function setTipodecuenta ($tipe){
                $this->tipodeCuenta = $tipe;
        }

        public function getTipodecuenta (){return $this->tipodeCuenta;}
        
        /**
         * Get the value of id
         */
 

        /**
         * Set the value of id
         */
   

        /**
         * Get the value of nombreUser
         */
        public function getNombreUser()
        {
                return $this->nombreUser;
        }
        
        /**
         * Set the value of nombreUser
         */
        public function setNombreUser($nombreUser): self
        {
                $this->nombreUser = $nombreUser;

                return $this;
        }

        /**
         * Get the value of contrasena
         */
        public function getContrasena()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         */
        public function setContrasena($contrasena): self
        {
                $this->contrasena = $contrasena;

                return $this;
        }
    }
?>