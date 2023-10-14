@foreach($posts as $post)
    {{$post->title}} <br>
    {{$post->content}}<br>
    <hr>
@endforeach
