@extends('layout')

@section('content')
    <h1>Dashboard de vendas</h1>
    <div class='card mt-3'>
        <div class='card-body'>
            <h5 class="card-title mb-5">Tabela de vendas
                <a href={{route('venda.create')}} class='btn btn-secondary float-right btn-sm rounded-pill'><i class='fa fa-plus'></i>  Nova venda</a></h5>
            <form>
                <div class="form-row align-items-center">
                    <div class="col-sm-5 my-1">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Clientes</div>
                            </div>
                            <select class="form-control" id="name" name="name">
                                @foreach ($clienteResource as $cliente)
                                <option value='{{$cliente->id}}'>{{$cliente->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 my-1">
                        <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">Período</div>
                            </div>
                            <input type="text" class="form-control date_range" id="inlineFormInputGroupUsername" placeholder="Username">
                        </div>
                    </div>
                    <div class="col-sm-1 my-1">
                        <button type="submit" class="btn btn-primary" style='padding: 14.5px 16px;'>
                            <i class='fa fa-search'></i></button>
                    </div>
                </div>
            </form>
            <table class='table'>
                <tr>
                    <th scope="col">
                        Produto
                    </th>
                    <th scope="col">
                        Data
                    </th>
                    <th scope="col">
                        Valor
                    </th>
                    <th scope="col">
                        Ações
                    </th>
                </tr>
                <tr>
                    @foreach ($produtoResource as $produto)
        <tr>
          <th scope="row">{{$produto->id}}</th>
          <td>{{$produto->name}}</td>
          <td>{{$produto->preco}}</td>

          <td>
            <div class="container">
            <button type="button" class="btn btn-outline-info btn-icon btn-lg btn-block" title='Editar' onclick='location.href="{{ route('produto.edit', $produto)}}"'>
              Editar
              <i class="fa fa-pen"></i>
            </button>
            <br>
            <form action="{{route('produto.destroy',[$produto->id])}}" method="POST">
              @method('DELETE')
              @csrf
              <button  type="submit" class="btn btn-outline-danger btn-icon btn-lg btn-block" title='Deletar'>
                Deletar
                <i class="fa fa-pen"></i>
              </button>
            </div>
            </form>
          </td>
        </tr>
    </div>
      @endforeach

                <tr>
                    <  @foreach ($vendaResource as $venda)

                    <tr>
                      <th scope="row">{{$venda->produto_id}}</th>
                      <td>{{$venda->qtd}}</td>
                      <td>{{$venda->preco}}</td>

                      <td>
                        <div class="container">
                        <button type="button" class="btn btn-outline-info btn-icon btn-lg btn-block" title='Editar' onclick='location.href="{{ route('venda.edit', $venda)}}"'>
                          Editar
                          <i class="fa fa-pen"></i>
                        </button>
                        <br>
                        <form action="{{route('venda.destroy',[$venda->id])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button  type="submit" class="btn btn-outline-danger btn-icon btn-lg btn-block" title='Deletar'>
                            Deletar
                            <i class="fa fa-pen"></i>
                          </button>
                        </div>
                        </form>
                      </td>
                    </tr>
                </div>
                  @endforeach
                </tr>
            </table>
        </div>
    </div>
    <div class='card mt-3'>
        <div class='card-body'>
            <h5 class="card-title mb-5">Resultado de vendas</h5>
            <table class='table'>
                <tr>
                    <th scope="col">
                        Status
                    </th>
                    <th scope="col">
                        Quantidade
                    </th>
                    <th scope="col">
                        Valor Total
                    </th>
                </tr>
                <tr>
                    <td>
                        Vendidos
                    </td>
                    <td>
                        100
                    </td>
                    <td>
                        R$ 100,00
                    </td>
                </tr>
                <tr>
                    <td>
                        Cancelados
                    </td>
                    <td>
                        120
                    </td>
                    <td>
                        R$ 100,00
                    </td>
                </tr>
                <tr>
                    <td>
                        Devoluções
                    </td>
                    <td>
                        120
                    </td>
                    <td>
                        R$ 100,00
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class='card mt-3'>
        <div class='card-body'>
            <h5 class="card-title mb-5">Produtos
                <a href={{route('produto.create')}} class='btn btn-secondary float-right btn-sm rounded-pill'><i class='fa fa-plus'></i>  Novo produto</a></h5>
            <table class='table'>
                <tr>
                    <th scope="col">
                        Nome
                    </th>
                    <th scope="col">
                        Valor
                    </th>
                    <th scope="col">
                        Ações
                    </th>
                </tr>
                <tr>
                    @foreach ($produtoResource as $produto)
                    <tr>
                      <th scope="row">{{$produto->name}}</th>
                      <td>{{$produto->preco}}</td>

                      <td>
                        <div class="container">
                        <button type="button" class="btn btn-outline-info btn-icon btn-lg btn-block" title='Editar' onclick='location.href="{{ route('produto.edit', $produto)}}"'>
                          Editar
                          <i class="fa fa-pen"></i>
                        </button>
                        <br>
                        <form action="{{route('produto.destroy',[$produto->id])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button  type="submit" class="btn btn-outline-danger btn-icon btn-lg btn-block" title='Deletar'>
                            Deletar
                            <i class="fa fa-pen"></i>
                          </button>
                        </div>
                        </form>
                      </td>
                    </tr>
                </div>
                  @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection
