<?php
    session_start();
	$login = $_POST['ds_email'];
	$senha = $_POST['ds_senhac'];
	
	
	include 'conecta.php';
	
	$result = mysqli_query($con,"select ds_email,ds_password from cliente where ds_email = '$login' and ds_password = '$senha'");
    	
	

	if(mysqli_num_rows ($result) > 0 ) { 

		$_SESSION['txtemail']   = $login; 
		$_SESSION['txtsenha']  = $senha; 
		
		if(isset($_SESSION['txtemail'])){							
				header('location:../views/index.html'); 
			}
		else
			{
			   header('location:../views/login.html'); 			}
	} 
	else{ 	    
		
		unset ($_SESSION['txtemail']); 
		unset ($_SESSION['txtsenha']);
		header('location:../views/login.html');
	}

?>	