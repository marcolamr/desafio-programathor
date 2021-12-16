<?php $v->layout("_theme"); ?>

<div class="container bg-dark text-white p-3 mt-4">
    <h1 class="display-4">Desafio Função SequenciaCrescente($array)</h1>
    <p class="lead">Receba como parametro um array de números inteiros e responda TRUE or FALSE se é possível obter uma sequencia crescente removendo apenas um elemento do array.</p>
</div>

<div class="container mt-4" id="base" data-post="<?= url("/calculate"); ?>">
    <h2 id="sequence"></h2>
    <h3 id="result"></h3>
</div>

<?php $v->start("scripts"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= theme("/assets/js/custom.js"); ?>"></script>
<?php $v->end(); ?>