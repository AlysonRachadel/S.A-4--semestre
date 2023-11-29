<?php
session_start();
$login = $_POST['ds_email'];
$senha = $_POST['ds_senhac'];

include 'conecta.php';

// Usando instruções preparadas para evitar injeção de SQL
$stmt = $con->prepare("SELECT ds_email, ds_password FROM cliente WHERE ds_email = ? AND ds_password = ?");
$stmt->bind_param("ss", $login, $senha);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
	$_SESSION['txtemail'] = $login;
	$_SESSION['txtsenha'] = $senha;
	header('location:../views/index.html');
} else {
	unset($_SESSION['txtemail']);
	unset($_SESSION['txtsenha']);
	echo '<script>alert("Email ou senha incorretos"); window.location="../views/login.html";</script>';
}

$stmt->close();
$con->close();
