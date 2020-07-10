<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Product;
use App\Pedido;
use App\PedidoProduto;
class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Product::all('id', 'nome', 'preco'); 
        $produtospedido = PedidoProduto::all(); 
        $clientes = Client::all('id','nome');       
        $pedidos = Pedido::paginate(10);
       
        return view('admin.pedido.index', compact('pedidos', 'clientes', 'produtos', 'produtospedido'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $clients = Client::all();
        $produtos = product::all(); 
        return view('admin.pedido.create', compact('clients', 'produtos'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       



        $data= $request->all('cliente_id');

        
        $salvar = Pedido::create($data);

        //dd($salvar);
        
        foreach($request->produto as $k => $id_produto){
            
            $pedido_produto = new PedidoProduto;

            $pedido_produto->id_pedido  = $salvar->id;
            $pedido_produto->id_produto = $id_produto;
            $pedido_produto->quantidade = $request->quantidade[$k];
            //dd($pedido_produto);
            $pedido_produto->save();

            
        }


        return redirect()->route('admin.pedido.index');

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
     * @param  int  $id_pedido, $id_cliente
     * @return \Illuminate\Http\Response
     */
    public function pedidoUpdate($id_pedido, $id_cliente)
    {
        //dd($id_cliente);

        $cliente = Client::findOrFail($id_cliente);

        $pedidos = PedidoProduto::where(['id_pedido' => $id_pedido])->get(); 
    
        //dd($pedidos);
        $produtos = product::all();

        return view('admin.pedido.edit', compact('cliente', 'pedidos', 'produtos'));

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
