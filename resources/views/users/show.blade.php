@extends('layouts.default')

@section('content')

<h1>Usuario {{ $users->username}}</h1>


<hr\>
<div class="col-xs-3"></div>

<div class="col-xs-6">

 
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Rol</th>
    </tr>
    
    <tr>
        <td>{{ $users->id}}</td>
        <td>{{ $users->username}}</td>
        <td>{{ $users->email}}</td>
        <td>{{ $users->role}}</td>
    
    </tr>
  
  </table>

</div>

<div class="col-xs-3"></div>


@stop
