<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\ClientStoreRequest;

class ClientController extends Controller
{
    public function index(){
        $clientModel = app(Client::class);

        $clients = $clientModel ->all();

        //$clients = $clientModel ->find(1);

        //$clients = $clientModel ->where('cpf',1234587891)->get();
       



        return view ('Clients/index', compact('clients'));
    }

    public function create(){
        return view('Clients/create');
       // $clientModel = app(Client::class);
        //$client = $clientModel->create([
            //'name'=>'name teste3',
            //'cpf'=> 1234587091,
            //'email'=> 'teste3@gmail.com',
            //'active_flag'=>false,
        //]);
    }

    public function store(ClientStoreRequest $request){

        $data = $request-> all();
        $clientModel = app(Client::class);
        $client = $clientModel->create([
            'name'=> $data['name'],
            'cpf' => preg_replace("/[^A-Za-z0-9]/","",$data['cpf']),
            'active_flag' => isset($data['active']) ? true:false,
            'email' => $data['email'],
            'endereco' => $data['end'] ?? null,
        ]);
       return redirect()->route('client.index');
    }
}
