<<<<<<< HEAD
<x-layout>

    <section class="container">
<div class="row justify-content-center mt-5">
<div class="col-12 text-center my-5">
    <h2>Tutti gli articoli </h2>
</div>

@foreach ($articles as $article)
<div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
<x-card
      
      titArticle="{{$article['title']}}"
      desArticle="{{$article['text_article']}}"
      idArticle="{{$article['id']}}"
      imgArticle="{{$article['img']}}"
      author="{{ $article->user->name }}"
>



</x-card>




</div>
@endforeach




</div>

    </section>

=======
<x-layout>

    <section class="container">
<div class="row justify-content-center mt-5">
<div class="col-12 text-center my-5">
    <h2>Tutti gli articoli </h2>
</div>

@foreach ($articles as $article)
<div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center mb-4">
<x-card
      
      titArticle="{{$article['title']}}"
      desArticle="{{$article['text_article']}}"
      idArticle="{{$article['id']}}"
      imgArticle="{{$article['img']}}"
>



</x-card>




</div>
@endforeach




</div>

    </section>

>>>>>>> 46f4a0d0578c5802e0061ffa2eb58dd87069f843
</x-layout>