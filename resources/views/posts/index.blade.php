@foreach($posts as $post)
    {{$post->title}} <br>
    {{$post->content}}<br>
    {{$post->author->name}}<br>
    {{$post->category->name}}<br>
    <hr>
@endforeach
