<div class="card mx-auto shadow text-center mb-3 cardMorph-inner">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Cover dell'articolo {{$article->title}}">
    <div class="card-body">{{Str::limit($article->title, 30)}}</h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}</h6>
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show',compact('article'))}}" class="buttonCustomPrimary text-decoration-none">Mostra</a>
            <a href="{{route('byCategory', ['category'=> $article->category->id])}}" class="buttonCustomInfo mt-2 text-decoration-none">{{$article->category->name}}</a>
        </div>
    </div>
</div>
