<?php 

include("Livros_.php");

$livroPhp = new Livros_();
$livroPhp->titulo = "PHP POO";
$livroPhp->anoEd = 2021;
$livroPhp->editora = "NovaTec";
$livroPhp->qtdPag = "500 páginas";
$livroPhp->valor = 39.99;
$livroPhp->isbn = "12121212";
$livroPhp->capa = "img/01.jpg";
$livroPhp->personagem = " João";


echo "<p> Titulo:".$livroPhp->titulo."</p>";
echo "<p> Ano da Edição:".$livroPhp->anoEd."</p>";
echo "<p> Editora:".$livroPhp->editora."</p>";
echo "<p> Quantidade de Pág:".$livroPhp->qtdPag."</p>";
echo "<p> Valor:". number_format($livroPhp->valor,2,",")."</p>";
echo "<p> Isbn:". $livroPhp->isbn."</p>";
echo "<p> capa:"; 
        echo "<img src='".$livroPhp->capa."' width='' height=''>";
        
echo "</p>";

echo "<p> valor com desconto:".number_format($livroPhp->desconto(50),2,",",".")."</p>";

echo "Personagem : ". $livroPhp->personagem;

?>