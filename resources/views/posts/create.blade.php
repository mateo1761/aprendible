<x-layouts.app 
    title="Crear nuevo post" 
    meta-description="Formulario para crear un nuevo blog post"
    >

    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="">
            Titulo <br/>
            <input name="title" type="text" value="{{old('title')}}">
            @error('title')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br/>
        <label for="">
            Body <br/>
            <textarea name="body">{{old('body')}}</textarea>
            @error('body')
                <br>
                <small style="color: red">{{$message}}</small>
            @enderror
        </label>
        <br/>
        <button type="submit">Enviar</button>
        <br/>
    </form>

    <a href="{{route('posts.index')}}">Regresar</a>


</x-layouts.app>