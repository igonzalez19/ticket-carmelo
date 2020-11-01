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
                <input type="text" name="nombre" value="{{ old('name') }}" class="form-control" placeholder="nombre de la comida para el ticket">
              </div>
              <div class="form-group">
                <label>precio</label>
                <input type="number" name="precio" value="{{ old('precio') }}" class="form-control"  placeholder="precio">
              </div>
              <div class="form-group">
                <label>fecha</label>
                <input type="date" name="fecha" value="{{ old('fecha') }}" class="form-control"  placeholder="fecha">
              </div>
              <div class="form-group">
                <label>hora</label>
                <input type="time" name="hora" value="{{ old('hora') }}" class="form-control"  placeholder="hora">
              </div>
              <button type="submit" value="create" class="btn btn-primary">crear</button>
            </form>
        </div>
        
        <div class="col-2"></div>
        
    </div>
</div>
@endsection