@extends('backend.base')

@section('content')

    <div class="container">
        <div class="row justify-content-md-center">
        
            <div class="col col-lg-2"></div>
            
            <div class="col-8">
                <form action="{{ url('backend/ticket') }}" method="post">
                    @csrf
                  <div class="form-group">
                    <label>Nombre de la comida</label>
                    <input type="text" name="nombre" value="{{ $name }}" class="form-control" placeholder="nombre de la comida para el ticket">
                  </div>
                  <div class="form-group">
                    <label>precio</label>
                    <input type="number" name="precio" value="{{ $price }}" class="form-control"  placeholder="precio">
                  </div>
                  <div class="form-group">
                    <label>fecha</label>
                    <input type="date" name="fecha" value="{{ str_replace('/', '-', $date) }}" class="form-control"  placeholder="fecha">
                  </div>
                  <div class="form-group">
                    <label>hora</label>
                    <input type="time" name="hora" value="{{ $time }}" class="form-control"  placeholder="hora">
                  </div>
                  <button type="submit" value="create" class="btn btn-primary">Editar</button>
                </form>
            </div>
            
            <div class="col-2"></div>
        
        </div>
    </div>

@endsection