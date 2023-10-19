
<html lang="pt-br">
	<head>		
		<meta charset="utf-8">
		<title>Consulta de clientes</title>	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <meta charset="utf-8">
        
        <!-- adicionar CSS Bootstrap >-->
        
        <!-- css personalizado >-->
        <link href="Css/style.css" rel="stylesheet" >
		
		<script src="script.js"></script>

		<script>
			function apagar(id){				
				if(window.confirm("Confirma a exclusão ? ")){
					window.location = "delprod.php?id=" + id;
				}				
			}		
		</script>		
	</head>
	<?php
		require 'conecta.php';	
		$sql = 'select * from cliente';
		/*
		  mysqli_query - É a função que irá retornar o resultado da script SQL por meio da variável.
		*/
		$query = mysqli_query($con,$sql);
	?>		
	<body>
		<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-condensed">
							<thead>
								<tr class="success">	
								<th>ID</th>	
                                <th>Nome</th>
									<th>Email</th>
									<th>Telefone</th>
									
								</tr>	
							</thead>
							<?php
								$contlin = 2;
								/*
								 mysqli_fetch_array - Retorna o campo, a posição do array
								*/
								while($reg_cadastro=mysqli_fetch_array($query))
								{
                                    $idCliente=$reg_cadastro["idCliente"];
									$nm_cliente=$reg_cadastro["nm_cliente"];
									$ds_email = $reg_cadastro["ds_email"];
									$ds_telefone = $reg_cadastro["ds_telefone"]."<br>";
									
								?>
								 <tr class="info">
									<?php
										if($contlin%2 == 0){
											?>
											<tr class="trpar">					
									<?php
										}
									?>	
                                    <td><?php echo $idCliente ?></td>
									<td><?php echo $nm_cliente ?></td>									
									<td><?php echo $ds_email ?></td>
									<td><?php echo $ds_telefone ?></td>
									
									
									<td align="center"><a href="delprod.php" class="btn btn-danger" onclick = "apagar('<?php echo $reg_cadastro["idCliente"]?>');">Excluir</td>
								</tr>

							<?php
								$contlin = $contlin + 1;
								}
							?>
						</table>
				</div>
			</div>
		</div>
	</div>			
	
	<!--<div class="col-xs-offset-4 col-xs-10">-->
	<div class='col-lg-offset-10'>
		<a href="indexx.html" class="btn btn-info">Voltar</a>
	</div>
  </body>
</html>








