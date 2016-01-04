@extends("layout")

@section("content")
    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('errors')
        <div class="container" id="post">
            <h1>{{$post->Header}}</h1>
            <div class="post">
                <p>Posted on {{$post->created_at}} by {{$post->user->name}}</p>
                <p>{!!$post->Content!!}</p>
            </div>
        </div>
        <div class="container" id="comments">
            <ul>
                @foreach($post->comments as $index=>$comment)
                <li>
                    <h4>{{$index + 1}}</h4>
                    <p>{{$comment->content}}</p>
                    <p>Posted on {{$comment->created_at}} by {{(is_null($comment->user))? "Anonymous Coward":$comment->user->name}}
                    </p>
                <li>
                @endforeach
            </ul>
            <form class="container-fluid" action = "{{$post->id}}/comment" method="post">
                    {{ csrf_field() }}
                <div class = "form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" name="content" required="true"></textarea>
                </div>
                <div class = "form-group form-inline">
                    <label for="author">Post As </label>
                        @if(Auth::check())                    
                        <input type = "checkbox" name="anonymous" value="true" id="anonymous" class="form-control" data-toggle = true data-user = "{{$user}}">
                        @else
                        <input type = "text" id="anonymous" value="Anonymous" disabled>
                        @endif
                </div>
                <div class = "form-group">
                    <button type="submit" class="form-control btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection