@extends('property.main')
@section('content')
<h1>Tela de listagem de imóveis</h1>

<div class="containerBtn float-right mb-2">
    <button type='button' class='btn btn-secondary'><a href='<?=url('/imoveis/novo'); ?>' class='text-white  '> Cadastrar novo Imóvel </a> </button>
</div>
<?php
//echo '<pre>'; var_dump($properties); echo '</pre>';
if(!empty($properties)){

    echo "<table class='table table-striped table-hover'>";
    echo "<thead class='bg-primary text-white text-center text'>
                <td>Título</td>
                <td>Valor de Locação</td>
                <td> Valor de Venda</td>
                <td> Ações </td>
          </thead>";
    foreach ($properties as $property){
        $linkReadMore = url('/imoveis/' . $property->slug);
        $linkEditItem = url('/imoveis/editar/' . $property->slug);
        $linkRemoveItem = url('/imoveis/remover/' . $property->slug);

        echo "<tr>
                <td>{$property->title}</td>
                <td> R$ ". number_format($property->rental_price, 2,',','.') ." </td>
                <td>R$ ". number_format($property->sale_price, 2,',','.') ." </td>
                <td >
                    <button type='button' class='btn btn-primary '><a href='{$linkReadMore}' class='text-white '>Ver Mais  </a> </button>
                    <button type='button' class='btn btn-success '><a href='{$linkEditItem}' class='text-white'>Editar    </a> </button>
                    <button type='button' class='btn btn-danger  '><a href='{$linkRemoveItem}' class='text-white'>Remover </a> </button>
                </td>


                </tr>";
    }
    echo "<table>";
}

?>
@endsection
