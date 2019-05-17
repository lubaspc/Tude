@extends('layaout.app')
@section('title','Tude')

@section('content')
<div class="card" style=>

        <div class="card-body">
          <h5 class="card-title">Bienvenido</h5>
          <p class="card-text">

              <br>

          </p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Profesores:
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/newProfesor'}}">Agregar</a></li>
                        <li class="breadcrumb-item"><a href="#">Editar</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Eliminar</li>
                    </ol>
                </nav>
            </li>
          <li class="list-group-item">Padres:
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'/newPadre'}}">Agregar</a></li>
                            <li class="breadcrumb-item"><a href="#">Editar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Eliminar</li>
                        </ol>
                    </nav>
          </li>
          <li class="list-group-item">Alumnos:
                <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{'/newAlumno'}}">Agregar</a></li>
                            <li class="breadcrumb-item"><a href="#">Editar</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Eliminar</li>
                        </ol>
                    </nav>
          </li>
        </ul>
        <div class="card-body">
          <a href="#" class="card-link">Grupos</a>
          <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{'/newGrupo'}}">Agregar</a></li>
                    <li class="breadcrumb-item"><a href="{{'/newGrupo'}}">Agregar</a></li>
                </ol>
            </nav>
        </div>
      </div>
@endsection
