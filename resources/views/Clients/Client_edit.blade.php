@extends('_shared.layout')
@section('content')
    <div class="card form-container col-md-6">
        <div class="card-header text-center">
            <h2>Update Client</h2>
        </div>
        <div class="card-body p-3">
            <form method="POST" class="form row" id="form" action={{ route('client_update', $client->id) }}>
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" value={{ $client->name }} class="form-control" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" value={{ $client->phone }}
                        placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="id_country" class="form-control" id="">
                        @foreach ($countries as $country)
                            <option value={{ $country->id }} {{ $client->id_country == $country->id ? 'selected' : '' }}>
                                {{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="" cols="10" class="form-control">{{ $client->address }}</textarea>
                </div>
                <input type="submit" value="Update" class="btn btn-info mt-1">
                <a href={{ route('client_show') }} class="btn btn-warning mt-1">Back</a>
            </form>
            @error('name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @enderror
            @error('address')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
            @error('phone')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        </div>
    </div>
@stop

