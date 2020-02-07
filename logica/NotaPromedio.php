<?php 

    class NotaPromedio{
        private $nota1;
        private $nota2;
        private $nota3;
        private $nota4;
        private $nota5;
        private $total;

        public function __construct(){
            $parametros=func_get_args();
            $numero_parametros = func_num_args();
            $funcion_constructor='__construct'.$numero_parametros;
            if (method_exists($this,$funcion_constructor)) {
                call_user_func_array(array($this,$funcion_constructor),$parametros);
            }
        }

        public function __construct5($nota1,$nota2,$nota3,$nota4,$nota5){
            $this->nota1=$nota1;
            $this->nota2=$nota2;
            $this->nota3=$nota3;
            $this->nota4=$nota4;
            $this->nota5=$nota5;
        }

        public function setNota1($valor){
            $this->nota1=$valor;
        }

        protected function getNota1(){
            return $this->nota1;
        }

        public function setNota2($valor){
            $this->nota2=$valor;
        }

        protected function getNota2(){
            return $this->nota2;
        }

        public function setNota3($valor){
            $this->nota3=$valor;
        }

        protected function getNota3(){
            return $this->nota3;
        }

        public function setNota4($valor){
            $this->nota4=$valor;
        }

        protected function getNota4(){
            return $this->nota4;
        }

        public function setNota5($valor){
            $this->nota5=$valor;
        }

        protected function getNota5(){
            return $this->nota5;
        }

        public function setTotal($valor){
            $this->total=$valor;
        }

        protected function getTotal(){
            return $this->total;
        }
    }


?>