@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container" id="blog">
            <h1>{{$post->Header}}</h1>
            <div class="post">
                <p>Posted on {{$post->created_at}} by {{$post->user->name}}</p>
                <p>{!!$post->Content!!}</p>
            </div>
        </div>
    </div>

@endsection