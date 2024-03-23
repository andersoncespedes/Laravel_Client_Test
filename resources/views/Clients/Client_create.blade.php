@extends('_shared.layout')
@section('content')

    <div class="card form-container col-md-6">
        <div class="card-header text-center">
            <h2>Save Client</h2>
        </div>
        <div class="card-body p-3">
            <form method="POST" class="form row" id="form" action={{ route('client_store') }}>
                @csrf
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Phone"
                        value="{{ old('phone') }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="country">Country</label>
                    <select name="id_country" class="form-control" id="">
                        @foreach ($countries as $country)
                            <option value={{ $country->id }}>{{ $country->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" class="form-control" id="" cols="10">{{ old('address') }}</textarea>
                </div>
                <input type="submit" value="Save" class="btn btn-success mt-2">
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
            @error('email')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        </div>

    </div>
@stop
