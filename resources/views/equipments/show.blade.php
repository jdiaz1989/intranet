@extends('layouts.default')

@section('content')

<h1>Equipos</h1>

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
        <th class="col-md-2">Fecha de entrega</th>
        <th>Número de serie</th>

    </tr>
    <tr>
        <td>{{ $equipments->id}}</td>
        <td>{{ $equipments->brand}}</td>
        <td>{{ $equipments->model}}</td>
        <td>{{ $equipments->owner}}</td>
        <td>{{ $equipments->first_name}}</td>
        <td>{{ $equipments->last_name}}</td>
        <td>{{ $equipments->status}}</td>
        <td>{{ $equipments->deliver_date}}</td>
        <td>{{ $equipments->serial_number}}</td>
    </tr>

</div>


@stop