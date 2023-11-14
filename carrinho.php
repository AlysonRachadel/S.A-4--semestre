<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Consulta de clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link href="Css/style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script src="script.js"></script>

    <script>
        function apagar(id) {
            if (window.confirm("Confirma a exclusão ? ")) {
                window.location = "delprod.php?id=" + id;
            }
        }
    </script>
</head>
<?php
require 'conecta.php';
$sql = 'select * from cliente';

$query = mysqli_query($con, $sql);
?>

<body>

    <nav class="navbar navbar-expand-lg justify-content-between">
        <a class="navbar-brand" href="indexx.html"> <img class="logo" src="img/logo nome.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <form class="form-inline">
            <a href="cadprod.html">
                <button type="button" id="botao" class="btn">Registrar</button>
            </a>
            <a href="consultacliente.php">
                <button type="button" id="botao" class="btn">Consultar</button>
            </a>
            <a href="index.html">
                <button type="button" id="botao" class="btn">Logar</button>
            </a>
        </form>
        </div>
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
                            <td>
                                <?php echo $idCliente ?>
                            </td>
                            <td>
                                <?php echo $nm_cliente ?>
                            </td>
                            <td>
                                <?php echo $ds_email ?>
                            </td>
                            <td>
                                <?php echo $ds_telefone ?>
                            </td>


                            <td><a href="#" onclick="apagar('<?php echo $reg_cadastro["
                                    idCliente"] ?>');"><button>Excluir</button></a></td>
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

    <div class='col-lg-offset-10'>
        <a href="indexx.html"><button class="btn" id="bacana"> Voltar</button></a>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 footer-column border-right">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-heading"><img src="img/logo lateral.png" class="logoroda">
                                <br>
                                Da Hora Pizzaria</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"> (47) 9 9925-3412</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bi bi-facebook" href="https://www.facebook.com/p/Da-hora-pizzaria-100044583169387/"> Da Hora pizzaria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dahorapizza@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 footer-column">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <span class="footer-heading"><img src="img/logo flux.png" class="logoroda">
                                <br>
                                Flux System</span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">h.xavier1232012@gmail.com</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">alyson.vinicius@icloud.com</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-2 box">
                    <span class="copyright quick-links">Copyright &copy; Flux System
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>