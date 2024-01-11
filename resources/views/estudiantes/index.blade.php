@extends('layouts.app');

@section('content');
<button onclick="window.location.href='{{ url('estudiantes/preadicionar')}}'" class="btn btn-info">Nuevo Estudiante</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Nombres</th>
      <th scope="col">Id_programa</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @foreach ($estudiantes as $estudiante)
    <tr>
      <th scope="row">{{$estudiante->id}}</th>
      <td>{{$estudiante->apellidos}}</td>
      <td>{{$estudiante->nombres}}</td>
      <td>{{$estudiante->id_programa}}</td>
      <td>
        <button type="button" class="btn btn-primary" value="{{$estudiante->id}}">Editar</button>
        <button type="button" class="btn btn-danger" value="{{$estudiante->id}}">Eliminar</button>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<script src="{{ asset('js/scriptEstudiante.js?n=2')}}"></script>

@endsection