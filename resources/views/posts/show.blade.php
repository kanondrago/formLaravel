

<x-layouts.app 
   :title="$post->title">
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>

<a href="{{ route('posts.index')}}">regresar</a>

</x-layouts.app>