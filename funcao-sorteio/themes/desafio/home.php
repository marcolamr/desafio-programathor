<?php $v->layout("_theme"); ?>

<div class="container bg-dark text-white p-3 mt-4">
    <h1 class="display-4">Desafio Função Sorteio</h1>
    <p class="lead">Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. Depois informe qual ou quais número(s) não se repetiram.</p>
</div>

<div class="container mt-4" id="lotery" data-post="<?= url("/calculate"); ?>">
    <h3 id="array"></h3>
    <p id="uniques"></p>
</div>

<?php $v->start("scripts"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= theme("/assets/js/custom.js"); ?>"></script>
<?php $v->end(); ?>