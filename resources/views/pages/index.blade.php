@extends("layouts.app")

@section('content')
<h1>Welcome To Laravel</h1>
<p>This is the laravel pplication from the Laravel from Scratch</p>
<div class="container">
            <!-- A grey horizontal navbar that becomes vertical on small screens -->
            <form class="form-inline" action="/action_page.php">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" placeholder="Enter email" id="email">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" placeholder="Enter password" id="pwd">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                  </label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
@endsection