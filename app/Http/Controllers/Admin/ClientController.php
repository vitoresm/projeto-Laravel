<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Client;
use App\Pedido;

use App\Http\Requests\ClientRequest;
class ClientController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *  Retorna a View
     */
    public function index()
    {

        $client = Client::all();

        return view('admin.client.index', compact('client'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Retorna a view
     */
    public function create()
    {
    
        return view('admin.client.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * pega o POST para criar
     */
    public function store(ClientRequest $request)
    {
        $data= $request->all();

        $salvar =  Client::create($data);
        
        return redirect()->route('admin.cliente.index');
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
        $client = Client::findOrFail($id);

        return view('admin.client.edit', compact('client'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * pega o post para editar
     */
    public function update(Request $request, $id)
    {
    
        $data = $request->all();

        $client = Client::findOrFail($id);
        $client->update($data);

        return redirect()->route('admin.cliente.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     * Excluiu 
     */
    public function destroy($id)
    {

        $cliente = Client::with('buscarPedidos')->find($id);

        if(count($cliente->buscarPedidos)){
            
            alert()->error('Erro','Não foi possível excluir esse usuário, pois ele possui pedidos');

        } else {
           
            $cliente->delete();
        
        }

        return redirect()->route('admin.cliente.index');
    
    }
}
