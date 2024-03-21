@extends("_shared.layout")
@section('content')
<form method="POST" class="form" action={{route("client_store")}}>
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" name="phone" class="form-control" placeholder="Phone">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <select name="id_country" id="">
            @foreach ( $countries as $country)
                <option value={{$country->id}}>{{$country->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <textarea name="address" id="" cols="10" ></textarea>
    </div>
    <input type="submit" value="Guardar">
</form>
@stop

