<?php
	//Conexão com o banco
	include 'conecta.php';
	
	//Metodo que puxa as variaveis setadas no formulario
	$ds_combonome = $_POST['ds_combonome'];
	$ds_valorcombo = $_POST['ds_valorcombo'];
	$ds_descricao = $_POST['ds_descricao'];
	$ds_imgprod = $_POST['ds_imgprod'];
	

	//msqli_query serve para inserir o conteudo do formulario na tabela do banco

	mysqli_query($con, "insert into produto(ds_combonome, ds_valorcombo,ds_descricao, ds_imgprod)
		 values('$ds_combonome','$ds_valorcombo','$ds_descricao','$ds_imgprod')");

	echo "<script>alert('Inclusão realizada com sucesso');</script>";
	echo "<script>window.location='index.html'</script>";

	?>
