{{-- <x-layout>

    <div class="container">
        <div class="row">
@foreach ($articles as $article)
    


       
        <div class="col-4">
        <x-card :article="$article"/>
            <form action="{{route('review',['article'=> $article])}}" method="POST">
                @csrf
                @method('PATCH')
            <button class="buttonCustomDanger py-2 px-5">Revisiona</button>
         </form>
        </div>
        @endforeach
     </div>
    </div>
</x-layout> --}}

<x-layout>

   

    <h1>Lista degli annunci da revisionare</h1>
    
    @if(session()->has('succes'))
        <div class="alert alert-success" role="alert">
            {{session('succes')}}
        </div>
    @endif
    <div class="container">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{Str::limit($article->description, 25)}}</td>
                <td>{{$article->price}} €</td>
                <td class="d-flex">
                    <a href="{{route('article.show',compact('article'))}}" class="buttonCustomPrimary text-decoration-none me-1">Mostra</a>
                    <form action="{{route('review',['article'=> $article])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="buttonCustomWarning me-1">Revisiona</button>
                    </form>
                    {{-- <form method="POST" action="{{route('categories.destroy', $category)}}">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-outline-danger" onclick="alert('Sei sicuro di voler eliminare la categoria?)')">Elimina</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
</div>
</x-layout>