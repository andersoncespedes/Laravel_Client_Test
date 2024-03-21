@extends('_shared.layout')

@section('content')
    <div class="col-md-2">
        <a href={{route("client_create")}} class="btn btn-success">Guardar</a>
    </div>

    <table class="table table-bordered">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Country</td>
            <td>Options</td>
        </tr>
        @foreach ($clients as $client)
            <tr>
                <td>{{$client->name}}</td>
                <td>{{$client->phone}}</td>
                <td>{{$client->address}}</td>
                <td>{{$clients[0]->countries->name}}</td>
                <td>
                    <a href={{route("")}}></a>
                </td>
            </tr>
        @endforeach

    </table>
@stop
