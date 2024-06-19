<div class="card mx-auto shadow text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Cover dell'articolo {{$article->title}}">
    <div class="card-body">{{Str::limit($article->title, 30)}}</h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}</h6>
        <div class="d-flex flex-column justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">Mostra</a>
            <a href="{{route('byCategory', ['category'=> $article->category->id])}}" class="btn btn-info mt-2">{{$article->category->name}}</a>
        </div>
    </div>
</div>
