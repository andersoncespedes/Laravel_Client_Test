@extends('_shared.layout')
@section('content')

    <div class="card form-container col-md-6">
        <div class="card-header text-center">
            <h2>Save Client</h2>
        </div>
        <div class="card-body p-3">
            <form method="POST" class="form row" action={{ route('client_store') }}>
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Phone">
                </div>
                <div class="form-group">
                    <label for="country">Country</label>
                    <select name="id_country" class="form-control" id="">
                        @foreach ($countries as $country)
                            <option value={{ $country->id }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" id="" cols="10"></textarea>
                </div>
                <input type="submit" value="Save" class="btn btn-success mt-2">
                <a href={{ route('client_show') }} class="btn btn-warning mt-1">Back</a>
            </form>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

    </div>

@stop
