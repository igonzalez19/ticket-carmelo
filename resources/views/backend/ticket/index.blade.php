@extends('backend.base')

@section('content')


 <table class="table">
            <thead>
                <th scope="col">id #</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">show</th>
                <th scope="col">edit</th>
                <th scope="col">delete</th>
            </thead>
            @foreach ($tickets as $ticket)
            <tbody>
                <tr>
                    <th scope="row">{{ $ticket['id'] }}</th>
                    <td>{{ $ticket['name'] }}</td>
                    <td>{{ $ticket['price'] }}</td>
                    <td><a href="{{ url('backend/ticket/' . $ticket['id']) }}">show</a></td>
                    <td><a href="{{ url('backend/ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                    <!--<td></td><a href="{{ url('ticket/'. $ticket['id'] . '/delete') }}">delete nuevo</a><br></td>-->
                    <td><a data-id="{{ $ticket['id'] }}" class="enlaceBorrar" href="#">delete javascript</a></td>
                    <form id="formDelete" action="{{ url('ticket') }}" method="post">
                        @method('delete')
                        @csrf
                    </form>
                    <script src="{{ url('js/script.js?rand=' . uniqid ()) }}"></script>
                </tr>
            </tbody>
            @endforeach
        </table>

@endsection