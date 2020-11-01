@extends('backend.base')

@section('content')

    <table class="table">
        <thead>
            <th scope="col">id #</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">edit</th>
            <th scope="col">delete</th>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $id }}</th>
                <td>{{ $name }}</td>
                <td>{{ $price }}</td>
                <td><a href="{{ url('backend/ticket/' . $id . '/edit') }}">edit</a></td>
                <!--<td></td><a href="{{ url('ticket/'. $id . '/delete') }}">delete nuevo</a><br></td>-->
                <td><a data-id="{{ $id }}" id="enlaceBorrar" href="#">delete javascript</a></td>
            </tr>
        </tbody>
    </table>




<br>
<form id="formDelete" action="{{ url('ticket/' . $id) }}" method="post">
    @method('delete')
    @csrf
</form>
<script src="{{ url('/js/script.js')}}"></script>
@endsection