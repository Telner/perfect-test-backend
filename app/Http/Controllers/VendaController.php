<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Venda;
use App\Models\Cliente;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtoResource = Produto::all();

        return view("crud_sales", compact("produtoResource"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $vendaModel = app(Venda::class);
        $ClienteModel = app(Cliente::class);
        $ProdutoModel = app(Produto::class);
        $cliente = $ClienteModel->create(
            [
            'name'    => $data['name'],
            'email'   => $data['email'],
            'cpf'     => $data['cpf'],
          ]);

          $produto = $ProdutoModel->find($data['produto_id']);
          $preco = ($data['qtd']*$produto->preco)-$data['desconto'];




        $vendas = $vendaModel->create(
         [
            'cliente_id'    => $cliente->id,
            'produto_id'    => $data['produto_id'],
            'preco'         => $preco,
            'qtd'           => $data['qtd'],
            'desconto'      => $data['desconto'],
            'status'        => $data['status'],
         ]);
         return view('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
