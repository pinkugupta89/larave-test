@extends("layouts.app")

@section('content')
<h2>Register</h2>
<form method="POST" action="/register">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="emailid" name="emailid">
    </div>

    <div class="form-group">
        <label for="password">last_name:</label>
        <input type="password" class="form-control" id="last_name" name="last_name">
    </div>

    <div class="form-group">
        <label for="password">Mobile:</label>
        <input type="password" class="form-control" id="mobile" name="mobile">
    </div>

    <div class="form-group">
        <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
    </div>
   
</form>
@endsection