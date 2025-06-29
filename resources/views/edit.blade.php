<x-layout>


    <div class="container-fluid">
        <div class="row text-center" >

            @if ($errors->any())
    <div class="alert alert-danger col-6 text-center">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
            @endif

            <h2 class="mt-5">Modifica  il tuo articolo</h2>

<div class="row justify-content-center">

<div class="col-12 col-md-8">


    <form
    enctype="multipart/form-data"
    method="POST"
    action="{{route('update', compact('article'))}}"
    class="justify-content-center"
    >
    @csrf
    @method('PUT')
    <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text"   name="title" class="form-control" id="title" aria-describedby="Inserisci Titolo" value="{{$article->title}}"> 
    </div>
    <div class="mb-3">
        <label for="img" class="form-label" >Inserisci immagine </label>
        <input type="file" name="img" class="form-control" id="img" placeholder="img">
    </div>
    
    <div class="mb-3">
        <label for="text_article" class="form-label"> Inserisci il contenuto dell'articolo</label>
        <textarea name="text_article" id="text_article" class="w-100" >
        {{$article->text_article}}
        </textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Inserisci il tuo articolo</button>
    </form>
</div>
</div>


</div>
</div>


</x-layout>