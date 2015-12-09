@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container">
            <h1>Log In</h1>
                <form action="/login" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="text" class="form-control" id="loginEmail" name="email" placeholder="me@example.com" />
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword" name="password" />
                    </div>                
                    <button type="submit" class="form-control">Submit</button>
                </form>
        </div>
    </div>

@endsection