@extends('app')
@section('content')
<form action = "{{route('actualizar-perros',['id'=>$lomito->id])}}" method = "POST">
    @method('PATCH')
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Raza</label>
    <input type="text" class="form-control" name = "raza" id="raza" aria-describedby="emailHelp" value = "{{$lomito->raza}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Color</label>
    <input type="text" class="form-control" name ="color" id="color" value = "{{$lomito->color}}">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Edad</label>
    <input type="number" class="form-control" name= "Edad" id="Edad" value = "{{$lomito->Edad}}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <a href="{{route('mostrar-perros')}}">Regresar</a>
</form>

@endsection