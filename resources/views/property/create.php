<h1>Formulário de Cadastro :: Imóveis</h1>

<p><a href="<?=url('/imoveis'); ?>">Voltar para listagem</a> </p>

<form action="<?=url('/imoveis/store'); ?>" method="post">

    <?= csrf_field(); ?>
    <label for="title">Título do Imóvel.:</label>
    <input type="text" name="title" id="title">
    <br />
    <br />

    <label for="description">Descrição............:</label>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
    <br />
    <br />

    <label for="rental_price">Valo de Locação.:</label>
    <input type="text" name="rental_price" id="rental_price">
    <br />
    <br />

    <label for="sale_price">Valo de Locação.:</label>
    <input type="text" name="sale_price" id="sale_price">
    <br />
    <br />

    <button type="submit"> Cadastrar Imóvel  </button>
</form>
