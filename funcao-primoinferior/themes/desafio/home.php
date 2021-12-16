<?php $v->layout("_theme"); ?>

<div class="container bg-dark text-white p-3 mt-4">
    <h1 class="display-4">Desafio Função PrimoInferior($num)</h1>
    <p class="lead">Crie uma função que receba como parâmetro 2 números  inteiros (inicial e final)  e informe quantos e quais números primos estão compreendidos entre o valor inicial e o final, desprezando o número inicial e final recebidos como parâmetro.</p>
</div>

<div class="container mt-4">
    <form class="row g-3" action="<?= url("/calculate"); ?>" method="post">
        <div class="col-md-6">
            <label for="initialNumber" class="form-label">Número Inicial</label>
            <input type="number" name="initialNumber" class="form-control" id="initialNumber">
        </div>
        <div class="col-md-6">
            <label for="finalNumber" class="form-label">Número Final</label>
            <input type="number" name="finalNumber" class="form-control" id="finalNumber">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Calcular</button>
        </div>
        <div id="result" class="form-text mt-4"></div>
    </form>
</div>

<?php $v->start("scripts"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<script src="<?= theme("/assets/js/custom.js"); ?>"></script>
<?php $v->end(); ?>