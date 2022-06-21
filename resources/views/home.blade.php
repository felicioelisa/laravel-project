<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Bem vindo">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bem vindo</title>
    
    <!-- Principal CSS do Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="home.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"> Login <span class="sr-only">(atual)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Desativado</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="#">Item</a>
                          <a class="dropdown-item" href="#">Outro item</a>
                          <a class="dropdown-item" href="#">Algum outro item</a>
                        </div>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pagamentos</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Pesquisa" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </nav>
    </header>

    <!-- Começa o conteúdo da página -->
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Bem vindo(a)!</h1>
                <p>Este é um template para um simples marketing ou website informacional. Ele inclui um callout grande (denominado jumbotron) e três conteúdos adicionais. Use-o como um ponto de partida para algo mais peculiar.</p>
                <p><a class="btn btn-primary btn-lg" href="#" role="button">Saiba mais &raquo;</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                </div>
            </div>

            <hr>

        </div>
    </main>
      
    <footer>
        <div class="container">
            <p>&copy; Elisa Felicio</i></p>
        </div>
    </footer>

    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

</body>
