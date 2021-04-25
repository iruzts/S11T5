@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

@if (session()->get('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>costo</th>
            <th>existencia</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($Productos as $Productos)
        <tr>
            <td> {{$Productos->id}}</td>
            <td> {{$Productos->nombre}} </td>
            <td> {{$Productos->descripcion}} </td>
            <td> {{$Productos->precio}} </td>
            <td> {{$Productos->costo}} </td>
            <td> {{$Productos->existencia}} </td>
            <td>
                <a href="{{route('Productos.edit', $Productos->id)}}" class="btn btn-success btn-sm">Editar</a>
                <form action="{{route('Productos.destroy', $Productos->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop