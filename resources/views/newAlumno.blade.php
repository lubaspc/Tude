@extends('layaout.app')
@section('title','newAlumno')
@section('content')
<div class="card">
        <div class="card-header text-center">
          <h4>Nuevo Alumno</h4>
        </div>
        <div class="card-body">
          <form action="/newAlumno" method="post">
            @csrf
            <div class="form-group">
                <label for="formGroupExampleInput">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="formGroupExampleInput" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput">Apellido Paterno</label>
                <input type="text" class="form-control" name="AP" id="formGroupExampleInput" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Apellido Materno</label>
                <input type="text" class="form-control" name="AM" id="formGroupExampleInput2" placeholder="Apellido Paterno">
            </div>
            <label for="formGroupExampleInput2">Seleccione el Padre</label>
            <select class="form-control" name="padre">
                    @foreach ($padre as $it)
                    <option value="{{$it->id}}">
                                  {{$it->nombre}} {{$it->ap_pat}} {{$it->ap_mat}}
                    </option>
                    @endforeach
            </select>
            <br>
            <label for="formGroupExampleInput2">Seleccione el Grupo</label>
            <select class="form-control" name="grupo">
                @foreach ($grupo as $it)
            <option value="{{$it->id}}">
                        Grado:{{$it->grado}} 
                        Grupo:{{$it->grupo}}
                        Maestro:{{$it->nombre}} {{$it->ap_pat}}
                    </option>
                @endforeach
            </select>
            <div class="card-body">
                <button type="button" class="btn btn-outline-danger">Regresar</button>
                <button type="submit" class="btn btn-outline-success">Guardar</button>
            </div>
          </form>
        </div>
</div>
@endsection
    