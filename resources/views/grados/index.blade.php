@extends('layouts.app', ['activePage' => 'grados', 'titlePage' => __('Modulo de grados')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
            <div class="col-12 text-left">
                <a href="{{ route('grados.create') }}" class="btn btn-info">Crear</a>
            </div>
        </div>
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Modulo de grados</h4>
            <p class="card-category"> Lista de grados</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>No.</th>
                  <th>Nombre</th>
                  <th>Nivel</th>
                  <th>Acciones</th>                  
                </thead>
                <tbody>
                  @foreach($grados as $grado)
                    <tr>
                        <td>{{$grado->id}}</td>
                        <td>{{$grado->nombre}}</td>
                        <td>{{$grado->nivel}}</td>
                        <td>
                            <form action="{{ route('grados.destroy',$grado->id) }}" method="POST">
                                <a href="{{ route('grados.edit',$grado->id) }}" class="btn btn-warning">Editar</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection