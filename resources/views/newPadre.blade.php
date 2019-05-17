@extends('layaout.app')
@section('title','newPadre')
@section('content')
<div class="card">
        <div class="card-header text-center">
          <h4>Nuevo Padre</h4>
        </div>
        <div class="card-body">
          <form action="/newPadre" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Seleccionar Foto</label>
                <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
            </div>
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
            <div class="form-group">
                <label for="formGroupExampleInput2">Edad</label>
                <input type="number" class="form-control" name="edad" id="formGroupExampleInput2" placeholder="Edad">
            </div>
            <div class="form-group">
            <select class="form-control form-control-lg" name="parentesco">
                <option>Padre</option>
                <option>Madre</option>
                <option>Abuelo</option>
                <option>Abuela</option>
            </select>
            </div>
            <div class="form-group">
                    <select class="form-control form-control-lg" name="sexo">
                        <option>M</option>
                        <option>F</option>
                    </select>
                    </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">INE</label>
                <input type="text" class="form-control" name="ine" id="formGroupExampleInput2" placeholder="INE">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">USERNAME</label>
                <input type="text" class="form-control" name="user" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput2">Contraseña</label>
                <input type="text" class="form-control" name="pass" id="formGroupExampleInput2" placeholder="">
            </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
@endsection
    
