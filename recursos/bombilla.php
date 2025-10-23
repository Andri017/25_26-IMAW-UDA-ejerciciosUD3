<?php
    Class bombilla{
        private bool $encendida;
        public function __construct (){
            $this->encendida=false;
        }

        public function getEncendida(): bool {
            return $this->encendida;
        }

        public function encender(): void {
            $this->encendida=true;
            echo "<p><em>La Bombilla está ahora encendida</em></p>";
        }

        public function apagar(): void {    
            $this->encendida=false;
            echo "<p><em>La Bombilla está ahora apagada</em></p>";
        }

        // public cambiar_estado($nuevo_estado): void {
        //     $this->encendida=$nuevo_estado;
        // }
    }
?>