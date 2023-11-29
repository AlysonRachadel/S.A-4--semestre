<?php
include 'conecta.php';

// Verificar se todos os campos do formulário foram preenchidos
if (empty($_POST['ds_nomec']) || empty($_POST['ds_telefone']) || empty($_POST['ds_email']) || empty($_POST['ds_senhac'])) {
	echo "<script>alert('Por favor, preencha todos os campos do formulário.');window.location='../views/login.html'</script>";
	exit(); // Encerrar o script se algum campo estiver vazio
}

// Passando os dados que estão no formulário para as variáveis abaixo
$ds_nomec = $_POST['ds_nomec'];
$ds_telefone = $_POST['ds_telefone'];
$ds_email = $_POST['ds_email'];
$ds_senhac = $_POST['ds_senhac'];

// Verificar se o e-mail já está cadastrado
$result = mysqli_query($con, "SELECT * FROM cliente WHERE ds_email = '$ds_email'");
if (mysqli_num_rows($result) > 0) {
	echo "<script>alert('Este e-mail já está cadastrado. Por favor, escolha outro.');window.location='../views/login.html'</script>";
	exit(); // Encerrar o script se o e-mail já estiver cadastrado
}

// Inserir os dados na tabela
mysqli_query($con, "INSERT INTO cliente(nm_cliente, ds_telefone, ds_email, ds_password) VALUES ('$ds_nomec', '$ds_telefone', '$ds_email', '$ds_senhac')");

echo "<script>alert('Inclusão realizada com sucesso');</script>";
echo "<script>window.location='../views/login.html'</script>";
