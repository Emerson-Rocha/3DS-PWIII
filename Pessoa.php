<?php
  // criar uma classe
  class Pessoa{
     // atributos
     public $_nome;
     public $_cpf;
     public $_dataNasc; // 19-07-1996
     public $_rg;
     public $_sexo;
     public $_naturalidade;
     public $_nascionalidade;
     public $_altura;
     public $_peso;
     public $_anoNasc; //[0]19 . [1]07 [2]1996

     // PEGAR ANO ATUAL VIA PHP NO S.O
        ///echo date("Y");
   
     //DIVIDIR A DATA EM DD-MM-YYYY
     // explode retorna em formato de array
    // print_r(explode("-",$pessoa_1->_dataNasc));

     // $anoNa = explode("-",$pessoa_1->_dataNasc);
      //$anoAt = date("Y");
      //echo $anoAt - $anoNa[2];
   // $pessoa_1->SubAno();
    //echo $pessoa_1->Idade(date("Y"));



   public function PegaAnoNasc(){     // 19-07-1996
     $this->_anoNasc = explode("-", $this->_dataNasc); 
   
   } 
    
     //metodo
     public function Idade($ano){
      
       return $ano - $this->_anoNasc[2];
       
     }
  }


?>