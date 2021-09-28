<h1>Tela de listagem de imóveis</h1>

<p><a href="<?=url('/imoveis/novo'); ?>">Cadastrar novo Imóvel</a> </p>

<?php
//echo '<pre>'; var_dump($properties); echo '</pre>';
if(!empty($properties)){

    echo "<table >";
    echo "<tr>
                <td>Título</td>
                <td>Valor de Locação</td>
                <td> Valor de Venda</td>
          </tr>";
    foreach ($properties as $property){
        $linkReadMore = url('/imoveis/' . $property->slug);
        $linkEditItem = url('/imoveis/editar/' . $property->slug);
        $linkRemoveItem = url('/imoveis/remover/' . $property->slug);

        echo "<tr>
                <td>{$property->title}</td>
                <td> R$ ". number_format($property->rental_price, 2,',','.') ." </td>
                <td>R$ ". number_format($property->sale_price, 2,',','.') ." </td>
                <td>
                    <a href='{$linkReadMore}'>Ver Mais  </a> |
                    <a href='{$linkEditItem}'>Editar    </a> |
                    <a href='{$linkRemoveItem}'>Remover </a>
                </td>


                </tr>";
    }
    echo "<table>";
}

?>
