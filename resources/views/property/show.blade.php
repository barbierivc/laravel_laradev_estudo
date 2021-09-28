@extends('property.main')
@section('content')
<h1 class="text-uppercase font-weight-bold">Página Single</h1>

<?php
if(!empty($property)){
    foreach ($property as $prop){
        ?>
        <h2>Título do Imóvel: <?= $prop->title?></h2>
        <div class="form-group">
            <label  class="text-uppercase font-weight-bold">Descrição do Imóvel:</label>
            <p><i> <?= $prop->description?> </i> </p>
        </div>
        <div class="form-group">
            <label class="text-uppercase font-weight-bold">Valor de Locação:</label>
            <p><label class="font-weight-bold "> R$ <?= number_format($prop->rental_price, 2,',', '.');?></label></p>
        </div>
        <div class="form-group">
             <label class="text-uppercase font-weight-bold">Valor de Venda:</label>
            <p><label class="font-weight-bold "> R$  <?= number_format($prop->sale_price, 2,',', '.');?></label></p>
        </div>


        <?php
    }
}
?>
@endsection
