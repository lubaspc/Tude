@extends('layaout.app')
@section('title','newGrupo')
@section('content')
<form action="/newGrupo" method="post">
    @csrf
<div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Crear grupo</h5>
          <div class="form-group">
            <label for="formGroupExampleInput2">Grado</label>
            <input type="number" class="form-control" name="grado" id="formGroupExampleInput2" placeholder="Grado">
            <label for="formGroupExampleInput2">Grupo</label>
            <input type="number" class="form-control" name="grupo" id="formGroupExampleInput2" placeholder="Grupo">
        </div>
        </div>
        <ul class="list-group list-group-flush">
          @foreach ($prof as $it)
          <li class="list-group-item">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="profe" id="gridRadios1" value="{{$it->id}}" checked>
                <label class="form-check-label" for="gridRadios1">
                        {{$it->nombre}} {{$it->ap_pat}} {{$it->ap_mat}}
                </label>
            </div>
        </li>
          @endforeach
        </ul>
        <div class="card-body">
        <button type="button" class="btn btn-outline-danger">Regresar</button>
          <button type="submit" class="btn btn-outline-success">Guardar</button>
        </div>
      </div>
    </form>
@endsection()