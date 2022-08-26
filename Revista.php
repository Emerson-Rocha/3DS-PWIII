<?php
include("Livros_.php");

// herança - visibilidade protected
// sub
class Revista extends Livros_{
   private $coresVestimento; //azul, vermelho, amarelo, branco
   protected $oficio;
   protected $tipoRev;
 
 function __construct($cores){
      //parent::__construct();
      $this->coresVestimento = $cores;
   }
   //

   public function __set($atributo, $value){
      $this->$atributo = $value;
    }
    public function __get($atributo){
       return $this->$atributo;
    }
}


?>