<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\AccessRequest;
use Session;
use App\Access;
use App\Client;
use Input;

class AccessController extends Controller {


	public function create()
	{
		$clients = Client::all()->lists('name','id');
		$selected=array();

		return view('access.create',compact('clients','selected'));
	}

	public function store(AccessRequest $request)
	{
		
		 Access::create(array_except($request->all(),'_token'));

	    return Redirect('home');
	}
	public function index()
    {
    	
        $access = Access::paginate(5);
        $access->setPath(' access');

        return view('access.index',compact('access'));
    }
    public function edit($id)
    {
       $access = Access::findOrFail($id);
       $client = Client::all()->lists('name','id');
       $selected=array();

        return view('access.edit', compact('access','client','selected'));
    }

       public function update(Access $access, AccessRequest $request,$id)
    {
    	$access = Access::findOrFail($id);
        $access->update($request->all());

        return redirect('access');
    }

     public function destroy($id)
    {
       $access = Access::find($id);
       $access->delete();
       return redirect('access');
    }

    public function show($id)
    { 
       $access = Access::find($id)->first();
    
       return view('access.show', compact('access'));
       
    }
    



}
