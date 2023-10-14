@foreach($authors as $author)
    {{$author->name}} <br>
    {{$author->posts()->count()}}<br>
    <hr>
@endforeach
