<?php
	include 'conecta.php';
	if(is_numeric($_GET["id"])){


		$sql = "DELETE FROM Cliente WHERE idCliente = ".$_GET["id"];
		mysqli_query($con,$sql);
		if(mysqli_affected_rows($con) >=0){
			echo"<script>alert('Registro apagado com sucesso');</script>";
			echo"<script>window.location='../views/consultacliente.php'</script>";
			}
	}