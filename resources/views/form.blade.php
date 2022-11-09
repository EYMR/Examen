@extends('plantilla')
@section('contenido')

@if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                <strong>Formulario Incompleto </strong>{{$error}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"> </button>
            </div>
            @endforeach
        @endif
<form action="guardarCyber" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">User</label>
        <input type="text" name="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('user')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Número de Computadora</label>
        <input type="text" name="ncomputadora" class="form-control" id="exampleInputPassword1" value="{{ old('ncomputadora')}}" >
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Tiempo</label>
        <input type="text" name="tiempo" class="form-control" id="exampleInputPassword1" value="{{ old('tiempo')}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Fecha</label>
        <input type="date" name="fecha" class="form-control" id="exampleInputPassword1" value="{{ old('fecha')}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</head>
<body>
@endsection