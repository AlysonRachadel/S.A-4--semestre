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
</head>

<body>

    <nav class="navbar navbar-expand-lg justify-content-between">
        <a class="navbar-brand" href="index.html"> <img class="logo" src="img/logo nome.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        $itemCarrinho = $_GET['item'] ?? null;
        $subitensCarrinho = $_GET['subitens'] ?? null;

        echo 'Item do carrinho: ' . htmlspecialchars(urldecode($itemCarrinho)) . '<br>';

        if ($subitensCarrinho) {
            $subitens = explode(',', urldecode($subitensCarrinho));
            echo 'Subitens do carrinho:<br>';
            foreach ($subitens as $subitem) {
                echo '- ' . htmlspecialchars($subitem) . '<br>';
            }
        }
        ?>

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
                <span class="copyright quick-links">Copyright &copy; Flux System>

                </span>
            </div>
        </div>
        </div>
        </footer>
        <script src="script.js"></script>
</body>

</html>