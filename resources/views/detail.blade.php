<x-layout>

    
    <div class="container text-center">
        
        <h2 class="text-center mt-5">{{$article->title}}</h2>
        @if(!$article->img)
        <img class="mt-5 " 
        src="https://picsum.photos/200/300" class="card-img-top" alt="">
        @else
        <img class="mt-5 " 
        src="{{ Storage::url($article->img) }}" 
        alt="{{$article->title}}">
        @endif

        <p class="mt-5">{{$article->text_article}}</p>

        <a href="{{route('edit', ['article' => $article->id])}}" class="btn btn-danger">Modifica Articolo</a>
       
    </div>

    <div class="row text-center mt-3">
        <form action="{{route('delete', compact('article'))}}" method="POST">
            @csrf
            @method('DELETE')

            <button  class="btn btn-danger" type="submit">Elimina l'articolo</button>
        </form>
    </div>

</x-layout>