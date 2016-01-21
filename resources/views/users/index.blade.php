@extends('layouts.default')

@section('content')

<div class="row">
<hr>


<div class="col-xs-6">
    @if (Session::has('message'))
    
    <p class="alert alert-success">{{Session::get('message')}}</p>
    
    @endif
    <div class="titulo"><center><h1>Usuarios</h1></center></div>


<!--Buscador -->
{!! Form::open(['route'=>'users.index','method'=>'get','class'=>'form-inline','role'=>'search']) !!}
  <div class="form-group">
    <label class="sr-only">Email</label>
    <p class="form-control-static">Buscar</p>
  </div>
  <div class="form-group">
    <label for="inputPassword2" class="sr-only">Buscador</label>
{!! Form::text('search',null,['class'=> 'form-control','placeholder'=>'Buscador'])!!}
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
{!! Form::close() !!}
 <!-- Fin Buscador -->
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Usuario</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Acción</th>
    </tr>
    @foreach ($users as $user)
    <tr data-id="{{ $user->id}}">
        <td>{{ $user->id}}</td>
        <td>{{ $user->username}}</td>
        <td>{{ $user->email}}</td>
        <td>{{ $user->role}}</td>
        <td>
        <a href=" {{ route('users.edit',$user->id) }} "><span class="glyphicon glyphicon-pencil"></span></a>
        <a href=" {{ url('/delete',$user->id)}}" onclick="return confirm('Desea eliminar esta registro')"><span class="glyphicon glyphicon-trash"></span></a>
        <a href=" {{ url('/users',$user->id)}} "><span class="glyphicon glyphicon-search"></span></a>
        </td>
    </tr>
    @endforeach
      <p>
        <a href="{{ route('users.create') }}" class="btn btn-primary">Crear un nuevo usuario</a>
      </p>
  </table>
    

{!! $users->render(); !!}

</div>
<div class="col-xs-3"></div>
</div>

@stop
