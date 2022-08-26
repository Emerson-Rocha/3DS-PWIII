<?php
include("Livros_.php");

// herança - visibilidade protected
// sub
class Revista extends Livros_{
    protected $coresVestimento; //azul, vermelho, amarelo, branco
    protected $oficio;
    protected $tipoRev;
 
 public function __construct($cores){
    
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