<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientesRequest;
use Session;
use App\User;
use App\Client;
use Input;
use Hash;
use DB;

class ClientesController extends Controller {

    public function create() {
        return view('clientes.create');
    }

    public function store(ClientesRequest $request) {

        Client::create(array_except($request->all(), '_token'));

        return Redirect('home');
    }

    public function mostrar() {
        $clientes = Client::paginate(5);
        $clientes->setPath('clientes');

        return view('home', compact('clientes'));
    }

    public function index() {
        $clientes = Client::paginate(5);
        $clientes->setPath('clientes');

        return view('clientes.index', compact('clientes'));
    }

    public function edit($id) {

        $client = Client::findOrFail($id);
        $user = User::all()->lists('username', 'id');
        $selected = array();

        return view('clientes.edit', compact('client', 'user', 'selected'));
    }

    public function ver($id) {
        $clientes_actuales = Client::paginate(5);
        $clientes = Client::findOrFail($id);
        $user = User::all()->lists('username', 'id');
        $selected = array();

        return view('clientes.ver', compact('clientes', 'user', 'selected', 'clientes_actuales'));
    }

    public function update(Client $client, ClientesRequest $request, $id) {
        $client = Client::findOrFail($id);
        $client->update($request->all());

        return redirect('clientes');
    }

    public function destroy($id) {
        $client = Client::find($id);
        $client->delete();
        return redirect('clientes');
    }

    public function show($id) {
        $clientes = Client::find($id)->first();

        return view('clientes.show', compact('clientes'));
    }

    public function acceso() {
        return view('acceso');
    }

}
