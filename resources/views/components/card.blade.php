<<<<<<< HEAD:resources/views/Components/card.blade.php
 <div class="card bg-dark text-white h-100">

  @if (!$imgArticle)
  <a href="" target="_blank" rel="noopener noreferrer">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="">
          </a>    
@else
          <a href="" target="_blank" rel="noopener noreferrer">
            <img src="{{Storage::url($imgArticle)}}" class="card-img-top" alt="">
          </a>
  @endif
          <div class="card-body">
            <p> Creato da: {{$author}}</p>
            <h4 class="card-text">{{$titArticle}}</h4>          
            <p class="card-text">{{$desArticle}}</p>
            <a href="{{route('detail', ['article' => $idArticle])}}" class="btn btn-danger">Scopri di più</a>
          </div>
=======
 <div class="card bg-dark text-white h-100">

  @if (!$imgArticle)
  <a href="" target="_blank" rel="noopener noreferrer">
            <img src="https://picsum.photos/200/300" class="card-img-top" alt="">
          </a>    
@else
          <a href="" target="_blank" rel="noopener noreferrer">
            <img src="{{Storage::url($imgArticle)}}" class="card-img-top" alt="">
          </a>
  @endif
          <div class="card-body">
            <h4 class="card-text">{{$titArticle}}</h4>          
            <p class="card-text">{{$desArticle}}</p>
            <a href="{{route('detail', ['article' => $idArticle])}}" class="btn btn-danger">Scopri di più</a>
          </div>
>>>>>>> 46f4a0d0578c5802e0061ffa2eb58dd87069f843:resources/views/components/card.blade.php
        </div>