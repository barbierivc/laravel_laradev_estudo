<h1>Formulário de Edição :: Imóveis</h1>
<?php
$property = $property[0];
?>

<p><a href="<?=url('/imoveis'); ?>">Voltar para listagem</a> </p>

<form action="<?=url('/imoveis/update', ['id'=>$property->id]); ?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>


    <label for="title">Título do Imóvel.:</label>
    <input type="text" name="title" id="title" value="<?= $property->title?>">
    <br />
    <br />

    <label for="description">Descrição............:</label>
    <textarea name="description" id="description"  cols="30" rows="10"><?= $property->description?></textarea>
    <br />
    <br />

    <label for="rental_price">Valo de Locação.:</label>
    <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price?>">
    <br />
    <br />

    <label for="sale_price">Valo de Locação.:</label>
    <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price?>">
    <br />
    <br />

    <button type="submit"> Editar Imóvel  </button>
</form>

