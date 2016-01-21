@extends('layouts.default')

@section('content')

<h1>Equipos</h1>

  
  <p>
    <a href="{{ route('equipments.create') }}" class="btn btn-primary">Crear un nuevo equipo</a>
  </p>

<hr\>
<div class="col-xs-9">
 
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Dueño</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Estado</th>
        <th>Fecha de entrega</th>
        <th>Número de serie</th>
        <th>Acciones</th>

    </tr>
    @foreach ($equipments as $equipment)
    <tr>
        <td>{{ $equipment->id}}</td>
        <td>{{ $equipment->brand}}</td>
        <td>{{ $equipment->model}}</td>
        <td>{{ $equipment->owner}}</td>
        <td>{{ $equipment->first_name}}</td>
        <td>{{ $equipment->last_name}}</td>
        <td>{{ $equipment->status}}</td>
        <td>{{ $equipment->deliver_date}}</td>
        <td>{{ $equipment->serial_number}}</td>
        
        <td>
        <a href=" {{ route('equipments.edit',$equipment->id) }} "><span class="glyphicon glyphicon-pencil"></span></a>
        <a href=" {{ url('equipments/delete',$equipment->id) }}" ><span class="glyphicon glyphicon-trash"></span></a>
        <a href=" {{ route('equipments.show',$equipment->id)}} "><span class="glyphicon glyphicon-search"></span></a>
        </td>
    </tr>
    @endforeach
  </table>


<?php echo $equipments->render(); ?>

</div>


@stop