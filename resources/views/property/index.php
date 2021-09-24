<h1>Tela de listagem de imóveis</h1>

<p><a href="<?=url('/imoveis/novo'); ?>">Cadastrar novo Imóvel</a> </p>

<?php
if(!empty($properties)){

    echo "<table>";
    echo "<tr>
                <td>Título</td>
                <td>Valor de Locação</td>
                <td> Valor de Venda</td>
                </tr>";
    foreach ($properties as $property){
        echo "<tr>
                <td>{$property->title}</td>
                <td> R$ ". number_format($property->rental_price, 2,',','.') ." </td>
                <td>R$ ". number_format($property->sale_price, 2,',','.') ." </td>
                </tr>";
    }
    echo "<table>";
}

?>
