<?php
			include 'conexao.php';
      /*
       isset - Retorna verdadeiro se tem valor no ID
      */
			if(isset($_GET["id"])){
        /*
         is_numeric - É a função que retorna se o valor é numérico.
        */
			   if(is_numeric($_GET["id"])){
					$id = $_GET["id"];
					$sql = "SELECT * FROM tb_cliente WHERE id_cliente = ".$_GET["id"];
          /*          
		        mysqli_query - É a função que irá retornar o resultado da script SQL por meio da variável.
		      */          
					$executa=mysqli_query($con,$sql);
           /*
						 mysqli_fetch_array - Retorna o campo, a posição do array
					*/
          $resultado=mysqli_fetch_array($executa);
				}
			}			
		?>