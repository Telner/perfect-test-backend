<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Http\Resources\ProdutoResource;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use Illuminate\Support\Facades\Cache;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $produtoModel = app(Produto::class);
        $produtos = $produtoModel->all();
        return view('produtos.index',compact('produtos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("crud_products");

    }

    public function store(StoreProdutoRequest $request)
    {

        $data = $request->all();
        $produtoModel = app(Produto::class);
        $produtos = $produtoModel->create(
         [
          'name'=>$data['name'],
          'descricao'=>$data['descricao'],
          'preco'=>$data['preco']??null,
         ]);
         return view('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produtoModel = app(Produto::class);
        $produto = $produtoModel->find($id);
        return view('produtos/edit', compact('produto'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProdutoRequest $request, $id)
    {
        $data = $request->all();
        $produtoModel = app(Produto::class);
        $produto = $produtoModel->find($id);
        $produto->update([
          'name'=>$data['name'],
          'descricao'=>$data['descricao'],
          'preco'=>$data['preco']??null,
        ]);
        return redirect()->route('produto.index');

    }

    /**
     * Remove the specified resource from storage.
     *qew
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)

        {
            if(!empty($id)){
                $produtoModel = app(Produto::class);
                $produto = $produtoModel->find($id);
                if(!empty($produto)){
                    $produto->delete();
                    return response()->json([
                        'status'  => 'success',
                        'message' => 'Produto deletado com sucesso.',
                        'reload'  => true,
                    ]);
                }
                else{
                    return response()->json([
                        'status'  => 'error',
                        'message' => 'ID não está na requisição',
                        'reload'  => true,
                    ]);

                }
            }

        }

}
