@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container" id="blog">
            <h1>Welcome to the Blag</h1>
            @foreach($posts as $post)
                <div class="post">
                    <h2>{{$post->Header}}</h2>
                    <p>{!!$post->Content!!}</p>
                    <p>Posted on {{$post->created_at}} by {{$post->user->name}}</p>
                </div>
                
            @endforeach
            <div class="pagination">
                {!! $posts->render() !!}
            </div>
        </div>
    </div>

@endsection