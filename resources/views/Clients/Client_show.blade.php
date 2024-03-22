@extends('_shared.layout')

@section('content')

    <div class="table-container col-md-10">

        <div class="col-md-12">
            <ul class="head-table">
                <li><h4>Client</h4></li>
                <li><a href={{ route('client_create') }} class="btn-insert">Add <span class="fa-solid fa-user-plus"></span> </a></li>
            </ul>

        </div>
        <table class=" table table-bordered table-dark table-striped table_client">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Country</td>
                    <td>Options</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->address }}</td>
                        <td>{{ $clients[0]->countries->name }}</td>
                        <td class="text-center ">
                            <div class="d-flex justify-content-center">
                                <form action={{ route('client_destroy', $client->id) }} method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button id="submit" onclick="submit()" class="btn btn-danger">
                                        <span  class="fa fa-trash"></span>
                                    </button>

                                </form>
                                <a href={{ route('client_edit', $client->id) }} class="btn btn-warning"><span class="fa fa-pen"></span></a>

                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="table-footer">
            <div class="total_row">
                Total of Rows: <span>{{$clients->total()}} </span>
            </div>
            <div class="links">
                {{$clients->links()}}
            </div>

        </div>

    </div>
<script>
    function submit(ef){
        ef.submit();
    }
</script>
@stop
