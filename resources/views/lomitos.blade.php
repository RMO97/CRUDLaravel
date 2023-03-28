@extends('app')
@section('content')

<table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Raza</th>
                    <th>Color</th>
                    <th>Edad </th>
                    <th colspan = "2">Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lomitos as $perro)
                <tr>
                    <td> {{$perro->id}} </td>
                    <td> {{$perro->raza}} </td>
                    <td> {{$perro->color}} </td>
                    <td> {{$perro->Edad}} <p> años</p></td>
                    <td>
                    <td>
                        <form action="{{ route('editar-perros', ['id' => $perro->id]) }}" method="GET">
                            <button class="btn btn-warning float-end" type="submit">Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('borrar-perros', ['id' => $perro->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn sm float-end">Eliminar</button>
                        </form>
                    </td>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <img src="https://www.euroresidentes.com/hogar/mascotas/wp-content/uploads/sites/5/2016/07/nadando-perrito.gif?x39313" alt="..." class="img-thumbnail">

  </body>
@endsection