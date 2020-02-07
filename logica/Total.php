<?php 
    require_once 'NotaPromedio.php';

    class Total extends NotaPromedio{

        public function __construct(){
            $parametros=func_get_args();
            $numero_parametros = func_num_args();
            $funcion_constructor='__construct'.$numero_parametros;
            if (method_exists($this,$funcion_constructor)) {
                call_user_func_array(array($this,$funcion_constructor),$parametros);
            }
        }

        public function __construct2($nota1,$nota2,$nota3,$nota4,$nota5,$total){
           parent::__construct5($nota1,$nota2,$nota3,$nota4,$nota5,$total);
        }

        public function calcularTotal(){
            return $this->getNota1()*0.20+$this->getNota2()*0.15+$this->getNota3()*0.22+$this->getNota4()*0.10+$this->getNota5()*0.33;
        }

    }

?>