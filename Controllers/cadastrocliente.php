	<?php
	/*
	include - Faz a inclusão do arquivo, permitindo executar a lógica do programa que se encontra neste arquivo
	
	*/
	include 'conecta.php';
	/*
	$_POST - É uma variável global que captura o conteúdo que está no formulário por meio da propriedade name		
	*/

	//Passando os dados que estão no formulário para as variáveis abaixo
	$ds_nomec = $_POST['ds_nomec'];
	$ds_telefone = $_POST['ds_telefone'];
	$ds_email = $_POST['ds_email'];
	$ds_senhac = $_POST['ds_senhac'];
	

	/*
	mysqli_query - É a função do php para execução de script de inserção da tabela
	*/

	mysqli_query($con, "insert into cliente(nm_cliente, ds_telefone,ds_email, ds_password)
		 values('$ds_nomec','$ds_telefone','$ds_email','$ds_senhac')");

	echo "<script>alert('Inclusão realizada com sucesso');</script>";
	echo "<script>window.location='../views/login.html'</script>";

	?>
