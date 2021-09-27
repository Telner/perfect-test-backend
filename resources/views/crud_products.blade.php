@extends('layout')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('produto.store')}}" method="POST">
    @method('POST')
    @csrf
    <h1>Adicionar / Editar Produto</h1>
    <div class='card'>
        <div class='card-body'>
            <form>
                <div class="form-group">
                    <label for="name">Nome do produto</label>
                    <input type="text" class="form-control " name="name" id="name" placeholder="Adicione o nome do Produto." required="required">
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" rows='5' class="form-control" name="descricao" id="descricao" required="required"></textarea>
                </div>
                <div class="form-group">
                    <label for="preco">Preço</label>
                    <input type="text" class="form-control" id="preco" name="preco" placeholder="100,00 ou maior">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection
@push('scripts')
<script></script>
@endpush

