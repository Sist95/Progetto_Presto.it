<div class="card mx-auto shadow text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Cover dell'articolo {{$article->title}}">
    <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="#" class="btn btn-primary">Mostra</a>
            <a href="#" class="btn btn-info">Categoria</a>
        </div>
    </div>
</div>