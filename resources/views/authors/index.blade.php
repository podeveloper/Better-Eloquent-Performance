@foreach($authors as $author)
    {{$author->name}} <br>
    {{$author->posts_count}}<br>
    <hr>
@endforeach
