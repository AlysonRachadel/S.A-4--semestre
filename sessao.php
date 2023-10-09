<?php
    session_start();
	$login = $_POST['nm_usuario'];
	$senha = $_POST['ds_senha'];
	
	// A include carrega o arquivo conexao.php
	include 'conecta.php';
	
	$result = mysqli_query($con,"select ds_usuario,ds_senha from Vendedor where ds_usuario = '$login' and ds_senha = '$senha'");
    	
	/* Logo abaixo tem um bloco com if e else, verificando se a variável $result foi bem sucedida, 
	ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, 
	se não, se não tiver registros seu valor será 0. */
	/*
	mysqli_num_rows - É a função que retorna o nr de linhas de um result set	
	*/

	if(mysqli_num_rows ($result) > 0 ) { 

		$_SESSION['txtnome']   = $login; 
		$_SESSION['txtsenha']  = $senha; 
		/*
		isset - É a função que retorna verdadeiro se a variável existe
		*/
		if(isset($_SESSION['txtnome'])){							
				header('location:index.html'); 
			}
		else
			{
			   header('location:login.html'); 			}
	} 
	else{ 	    
		/*
	     unset - É a função que destroi a variável de sessão		
		*/
		unset ($_SESSION['txtnome']); 
		unset ($_SESSION['txtsenha']);
		header('location:login.html');
	}

?>	