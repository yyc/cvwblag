@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container">
            <h1>New Post</h1>
                <form action="/new" method="POST" class="container-fluid">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="postTitle">Title</label>
                        <input type="text" class="form-control" id="postTitle" name="title" placeholder="My Title Here" />
                    </div>                
                    <div class="form-group">
                        <label for="post">Post</label>
                        <textarea id="post" name="post" class="form-control"></textarea>
                    </div>                
                    <div class="form-group">
                        <button type="submit" class="form-control">Submit</button>
                    </div>
                </form>
        </div>
    </div>

@endsection