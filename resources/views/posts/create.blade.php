

<x-layouts.app 
   title="crear nuevo Post">

<h1>Create new Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <label>
        Title <br>
        <input name="title" type="text">
    </label><br>
    <label>
        Body <br>
        <textarea name="body"></textarea>
    </label><br>
    <button type="submit">Enviar</button>
    <br>
</form>
<br>

<a href="{{ route('posts.index')}}">Regresar</a>

</x-layouts.app>