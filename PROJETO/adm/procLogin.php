<?php
// declarar que estarei trabalhando com sessão
session_start();

include("../servidor.php");

// iremos pegar o dados preenchido no formulario

$login = $_POST['login'];
$senha = $_POST['senha'];

//echo $login . " " . $senha; 

$sql = " select  * from tb_usuario " ;
$sql .= " where login_us = '".$login."' and  senha_us ='".md5($senha)."'";

//echo $sql;

// executar a string feita em php e converte em comando sql

   $resultado  = mysqli_query($banco, $sql );
// saber o numero de linha retornado
   //echo mysqli_num_rows($resultado);

   if(mysqli_num_rows($resultado) == 1){
     // a consulta no banco  retorna e array
       $tabela = mysqli_fetch_array($resultado);

      //  echo $tabela['nome_us'];
      //  echo $tabela['cod_us'];
      // echo $tabela['senha_us'];
       // session
       $_SESSION['login']['id']=  $tabela['cod_us']; ;
       $_SESSION['login']['nome'] =  $tabela['nome_us'];
      
      
      // direcionar para tela menu 
     header("location: menu.php");      
   }else{
    echo "<script type='text/javascript'>";
          echo "alert('Usuário não Localizado !!!!')";
          echo "
          Voltar();
       function Voltar(){
         location.href='index.php';  

        }";
 
    echo "</script>";

   }