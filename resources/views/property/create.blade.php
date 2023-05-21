@extends('property.master')

@section('content')

<div class="container my-3">

<h1>Formulario de Cadastro :: Imoveis</h1>

<form action="<?= url('/imoveis/store'); ?>" method="post">

<?= csrf_field();?>
    <div class="form-group">
    <label for="">Titulo do Imovel</label>
    <input type="text" name="title" id="title" class="form-control">
    </div>


    <label for="description">Descrição</label>
    <textarea name="description" id="title" cols="30" rows="10" class="form-control"></textarea>


    <div class="form-group">
    <label for="rental_price">Valor da Locação</label>
    <input type="text" name="rental_price" id="rental_price" class="form-control">
    </div>

    <div class="form-group">
    <label for="sale_price">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price" class="form-control">
    </div>
    <br>

<button type="submit" class="btn btn-primary">Cadastrar Imovel</button>


</form>


</div>
@endsection

