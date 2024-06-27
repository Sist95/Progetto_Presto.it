  <div class="card mx-auto shadow text-center mb-3 cardMorph-inner">
    <img src="https://picsum.photos/200" class="card-img-top rounded-4 px-2 py-2" alt="Cover dell'articolo {{$article->title}}">
    <div class="card-body"><h3>{{Str::limit($article->title, 25)}}</h3>
        <h5 class="card-subtitle text-body-secondary">Prezzo: {{$article->price}} €</h5>
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-3">
            <a href="{{route('article.show',compact('article'))}}" class="buttonCustomPrimary text-decoration-none">Mostra</a>
            <a href="{{route('byCategory', ['category'=> $article->category->id])}}" class="buttonCustomInfo mt-2 text-decoration-none">{{$article->category->name}}</a>
        </div>
    </div>
</div>
