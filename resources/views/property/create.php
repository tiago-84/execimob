<h1>Formulario de Cadastro :: Imoveis</h1>

<form action="<?= url('/imoveis/store'); ?>" method="POST">

<?= csrf_field();?>

<label for="">Titulo do Imovel</label>
<input type="text" name="title" id="title">

<br>

<label for="description">Descriçãol</label>
<textarea name="description" id="title" cols="30" rows="10"></textarea>

<br>

<label for="rental_price">Valor da Locação</label>
<input type="text" name="rental_price" id="rental_price">

<br>

<label for="sale_price">Valor de Compra</label>
<input type="text" name="sale_price" id="sale_price">

<br>

<button type="submit">Cadastrar Imovel</button>


</form>
