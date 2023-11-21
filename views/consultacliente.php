<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Consulta de clientes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">

	<link href="../Css/style.css" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<script src="../JS/script.js"></script>

	<script>
		function apagar(id) {
			if (window.confirm("Confirma a exclusão ? ")) {
				window.location = "../Controllers/delcliente.php?id=" + id;
			}
		}
	</script>
</head>
<?php
require '../Controllers/conecta.php';
$sql = 'select * from cliente';
/*
		  mysqli_query - É a função que irá retornar o resultado da script SQL por meio da variável.
		*/
$query = mysqli_query($con, $sql);
?>

<body>
	<nav class="navbar navbar-expand-lg justify-content-between">
		<a class="navbar-brand" href="index.html"> <img id="logo" src="../img/logo nome.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<form class="form-inline">
			<a href="./pedidos.html"><button type="button" id="btn" class="btn">Pedir Delivery</button></a>

		</form>

	</nav>
	<div align="center" class="container ">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-responsive ">
					<table class="table table-bordered table-striped table-hover table-condensed ">
						<thead>
							<tr class="">
								<th>ID</th>
								<th>Nome</th>
								<th>Email</th>
								<th>Telefone</th>
								<th>Ação</th>

							</tr>
						</thead>
						<?php
						$contlin = 2;
						/*
								 mysqli_fetch_array - Retorna o campo, a posição do array
								*/
						while ($reg_cadastro = mysqli_fetch_array($query)) {
							$idCliente = $reg_cadastro["idCliente"];
							$nm_cliente = $reg_cadastro["nm_cliente"];
							$ds_email = $reg_cadastro["ds_email"];
							$ds_telefone = $reg_cadastro["ds_telefone"] . "<br>";

						?>
							<tr class="info">
								<?php
								if ($contlin % 2 == 0) {
								?>
							<tr class="trpar">
							<?php
								}
							?>
							<td><?php echo $idCliente ?></td>
							<td><?php echo $nm_cliente ?></td>
							<td><?php echo $ds_email ?></td>
							<td><?php echo $ds_telefone ?></td>


							<td><a href="#" onclick="apagar('<?php echo $reg_cadastro["idCliente"] ?>');"><button>Excluir</button></a></td>
							</tr>

						<?php
							$contlin = $contlin + 1;
						}
						?>
					</table>
					<div class='col-lg-offset-10'>
						<a href="pedidos.html"><button id="btn" class="btn"> Voltar</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>

</html>