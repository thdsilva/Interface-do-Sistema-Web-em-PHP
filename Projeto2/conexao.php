<?php
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "empresax";
     $conecta = mysqli_connect($servidor, $usuario, $senha, $banco);
	    if($conecta == true){
		echo "Conexão com o servidor efetuada com sucesso.";
		}else{
		echo "Falha ao conecar ao servidor";
		}
?>

