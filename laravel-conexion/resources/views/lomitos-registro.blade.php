@extends('app')
@section('content')
<form action = "{{route('registrar-perros')}}" method = "POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Raza</label>
    <input type="text" class="form-control" name = "raza" id="raza" aria-describedby="emailHelp" placeholder="Raza">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Color</label>
    <input type="text" class="form-control" name ="color" id="color" placeholder="Color">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Edad</label>
    <input type="number" class="form-control" name= "Edad" id="Edad" placeholder="Edad">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

@endsection