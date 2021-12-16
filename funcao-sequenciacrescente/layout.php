<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Função SeculoAno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container bg-dark text-white p-3 mt-4">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
</div>

<div class="container">
    <div class="row g-3 align-items-center mt-4">
        <div class="col-auto">
            <label for="input-age" class="col-form-label">Digite um ano (ex. 1835)</label>
        </div>
        <div class="col-auto">
            <input type="number" id="input-age" maxlength="4" class="form-control" data-calculate="<?= url("/calculate"); ?>">
        </div>
        <div class="col-auto">
        <span id="result" class="form-text"></span>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>