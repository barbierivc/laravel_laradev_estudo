<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laradev:: CRUD Imobi</title>

    <link rel="stylesheet" href="<?= asset('css/app.css');?>">
</head>
<body>
<nav>
    <div class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="<?= url('/imoveis');?>" class="navbar-brand"><i>Imobiliária</i> - Lara<strong>Dev</strong></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?= url('/imoveis');?>" class="nav-link">Listar Imóveis</a></li>
                <li class="nav-item"><a href="<?= url('/imoveis/novo/');?> " class="nav-link">Cadastrar Imóveis</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-3">
    @yield('content')
</div>


<script src="<?= asset('js/app.js');?>"></script>
</body>
</html>
