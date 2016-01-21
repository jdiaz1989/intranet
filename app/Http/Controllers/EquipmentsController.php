<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EquipmentRequest;
use Session;
use App\Equipment;
use Input;

class EquipmentsController extends Controller {


	public function create()
	{
		$equipment = Equipment::all();

		return view('equipments.create',compact('equipment'));
	}

	public function store(EquipmentRequest $request)
	{
		
		 Equipment::create(array_except($request->all(),'_token'));

	    return Redirect('equipments');
	}
	public function index()
    {
        $equipments = Equipment::paginate(5);
        $equipments->setPath('equipments');

        return view('equipments.index',compact('equipments'));
    }
    public function edit($id)
    {
       $equipment = Equipment::findOrFail($id);

        return view('equipments.edit', compact('equipment'));
    }

       public function update(Equipment $equipment, EquipmentRequest $request,$id)
    {
    	$equipment = Equipment::findOrFail($id);
      $equipment->update($request->all());

        return redirect('equipments');
    }

     public function destroy($id)
    {
       $equipment = Equipment::findOrFail($id);
       $equipment->delete();
       return redirect('equipments');
    }

    public function show($id)
    { 
       $equipments = Equipment::findOrFail($id)->first();
    
       return view('equipments.show', compact('equipments'));
       
    }
    



}
