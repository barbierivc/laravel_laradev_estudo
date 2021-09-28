@extends('property.main')
@section('content')
<h1>Formulário de Edição :: Imóveis</h1>
<?php
$property = $property[0];
?>

<form action="<?=url('/imoveis/update', ['id'=>$property->id]); ?>" method="post">

    <?= csrf_field(); ?>
    <?= method_field('PUT'); ?>

    <div class="form-group">
        <label for="title" class="text-uppercase font-weight-bold">Título do Imóvel:</label>
        <input type="text" name="title" id="title" value="<?= $property->title?>" class="form-control">
    </div>
        <div class="form-group">
            <label for="description" class="text-uppercase font-weight-bold">Descrição:</label>
            <textarea name="description" id="description"  cols="30" rows="10" class="form-control"><?= $property->description?></textarea>
        </div>

        <div class="form-group">
            <label for="rental_price" class="text-uppercase font-weight-bold">Valor de Locação:</label>
            <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price?>" class="form-control">
        </div>
        <div class="form-group">
            <label for="sale_price" class="text-uppercase font-weight-bold">Valor de Venda:</label>
            <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price?>" class="form-control">
        </div>

    <button type="submit" class="btn btn-info text-white"> Editar Imóvel  </button>
</form>

@endsection

