<?php
   include("Pessoa.php");

   // instância/Objeto
    $pessoa_1 = new Pessoa();
    $pessoa_1->_nome = "João";
    $pessoa_1->_dataNasc = "31-07-1996";     //
    echo $pessoa_1->_nome;
    echo "<br>";
    echo $pessoa_1->_dataNasc; 
    echo "<br>";
    $pessoa_1->PegaAnoNasc();
    echo $pessoa_1->Idade(date("Y"));
    

?>