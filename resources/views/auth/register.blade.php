@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container">
            <h1>Register</h1>
                <form action="/register" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <input type="text" class="form-control" id="registerEmail" name="email" placeholder="me@example.com" />
                        <label for="registerName">Name</label>
                        <input type="text" class="form-control" id="registerName" name="name" placeholder="Kilroy" />
                        <label for="registerPassword">Password</label>
                        <input type="password" class="form-control" id="registerPassword" name="password" />
                        <label for="registerPasswordConfirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="registerPasswordConfirmation" name="password_confirmation" />
                    </div>                
                    <button type="submit" class="form-control">Submit</button>
                </form>
        </div>
    </div>

@endsection