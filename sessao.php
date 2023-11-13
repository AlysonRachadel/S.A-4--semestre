<?php
    session_start();
	$login = $_POST['ds_usuario'];
	$senha = $_POST['ds_senha'];
	
	
	include 'conecta.php';
	
	$result = mysqli_query($con,"select ds_usuario,ds_senha from vendedor where ds_usuario = '$login' and ds_senha = '$senha'");
    	
	

	if(mysqli_num_rows ($result) > 0 ) { 

		$_SESSION['txtnome']   = $login; 
		$_SESSION['txtsenha']  = $senha; 
		
		if(isset($_SESSION['txtnome'])){							
				header('location:index.html'); 
			}
		else
			{
			   header('location:login.html'); 			}
	} 
	else{ 	    
		
		unset ($_SESSION['txtnome']); 
		unset ($_SESSION['txtsenha']);
		header('location:login.html');
	}

?>	