<?php $v->layout("_theme"); ?>

<div class="container bg-dark text-white p-3 mt-4">
    <h1 class="display-4">Desafio Função SeculoAno($ano)</h1>
    <p class="lead">Desenvolva uma função que receba como parametro o ano e retorne o século ao qual este ano faz parte. O primeiro século começa no ano 1 e termina no ano 100, o segundo século começa no ano 101 e termina no 200.</p>
</div>

<div class="container">
    <div class="row g-3 align-items-center mt-4">
        <div class="col-auto">
            <label for="input-age" class="col-form-label">Digite um ano (ex. 1835)</label>
        </div>
        <div class="col-auto">
            <input type="number" id="input-age" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                   maxlength = "4" class="form-control" data-calculate="<?= url("/calculate"); ?>">
        </div>
        <div class="col-auto">
            <span id="result" class="form-text"></span>
        </div>
    </div>
</div>

<?php $v->start("scripts"); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?= theme("/assets/js/custom.js"); ?>"></script>
<?php $v->end(); ?>