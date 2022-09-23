<?php
include_once("servidor.php");
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    
    <title>Document</title>
</head>
<body>
<div class="container mt-5">
<table class="table table-bordered">
<tr>
      
    <?php
     $sql = " SELECT * FROM TB_LIVRO ";

     $tabela = mysqli_query( $banco  , $sql );

     // saber quantas linha foram retornada
       echo mysqli_num_rows($tabela);

  while( $campo = mysqli_fetch_array($tabela)   ){
   echo "<td> 
       
           <img src='adm/".$campo["img_liv"]."'>
           <h3>".$campo["titulo_liv"]."</h3>
           <a href='detalhe.php?cod_liv=".$campo["cod_liv"]."'> 
           detalhe</a>
        </td> " ; }

?>
    </tr>

</table>

</div>

<script src="../js/jquery-3.5.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>

</body>
</html>