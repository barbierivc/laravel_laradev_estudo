@extends('property.main')
@section('content')
<h1>Formulário de Cadastro :: Imóveis</h1>


<form action="<?=url('/imoveis/store'); ?>" method="post">

    <?= csrf_field(); ?>

        <div class="form-group">
            <label for="title" class="text-uppercase font-weight-bold">Título do Imóvel:</label>
            <input type="text" name="title" id="title"  class="form-control">
        </div>
        <div class="form-group">
            <label for="description" class="text-uppercase font-weight-bold">Descrição:</label>
            <textarea name="description" id="description"  cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="rental_price" class="text-uppercase font-weight-bold">Valor de Locação:</label>
            <input type="text" name="rental_price" id="rental_price"  class="form-control">
        </div>
        <div class="form-group">
            <label for="sale_price" class="text-uppercase font-weight-bold">Valor de Venda:</label>
            <input type="text" name="sale_price" id="sale_price"  class="form-control">
        </div>



    <button type="submit" class="btn btn-info text-white"> Cadastrar Imóvel  </button>
</form>
@endsection
