@extends('layaout.app')
@section('title','Login')
@section('content')
<div class="card">
        <div class="card-header text-center">
                <img style="height: 100px;" src="{{'images/logo.jpg'}}" alt="">
                <br>
          <h4>Iniciar Seccion</h4>
        </div>
        <div class="card-body">
          <form action="/" method="post">
            @csrf
                <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" name="user" class="form-control" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">Coloca tu usuario</small>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
                      </div>
                      <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
@endsection()