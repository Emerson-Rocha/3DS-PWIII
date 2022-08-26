<?php
 // super
 class Livros_ {
   // 1º atributo (private)
      private $titulo;
      private $anoEd;
      private $editora;
      private $qtdPag;
      protected $personagem; // array
      private $isbn;
      private $valor;
      private $capa;
         // 2º construtor
      // vazio
      public function __construct(){

      }
   //  3º metodo mágicos , public, 
   // colar o valor do livro e depois dar desconto
     //livres
     public function __set($atributo, $value){
       $this->$atributo = $value;
     }
     public function __get($atributo){
        return $this->$atributo;
     }
     public function desconto($desc){
          return  $this->valor - ($this->valor * $desc)/100;
     }
     // 4º três objeto/ instância  

 }


?>