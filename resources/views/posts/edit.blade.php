<x-layouts.app 
    :title="$post->title" 
    meta-description="Home meta description"
    >

    <h1>Edit form</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <br/>
        <button type="submit">Enviar</button>
        <br/>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>


</x-layouts.app>