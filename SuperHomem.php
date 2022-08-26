<?php

include("Revista.php");
// completa o resto
$SuperHomem = new Revista(["Azul", "Vermelho","Branco","Amarelo"]);
$SuperHomem->titulo = "Cripto e seu rival Lex  Luthor";
$SuperHomem->personagem =["Clark kent","Lois Lane", "Lex"];
//$SuperHomem->$coresVestimento =  ["Azul", "Vermelho","Branco","Amarelo"] ;

echo "<p>Titulo:".$SuperHomem->titulo."</p>";
echo "<p>Personagem(s)</p>";

echo "<ul>";


foreach ($SuperHomem->personagem as $key => $value) {
    echo "<li>".$value."</li>";
}
echo "</ul>";

echo "<p>Cores(s)</p>";
echo "<ul>";
foreach ($SuperHomem->coresVestimento as $key => $value) {
    echo "<li>".$value."</li>";
}
echo "</ul>";


?>