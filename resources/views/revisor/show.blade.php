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

   
    <div class="row justify-content-center align-items-center text-center">
        @if(session()->has('succes'))
            <div class="alert alert-success" role="alert">
                {{session('succes')}}
            </div>
        @endif
    <div class="col-12">
        <h1 class="display-4 mb-4">Lista degli annunci da revisionare</h1>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-10">
    <table class="table">
      <thead class="table-light">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Descrizione</th>
          <th scope="col" class="d-none d-sm-block">Prezzo</th>
          <th scope="col">Azioni</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{Str::limit($article->description, 25)}}</td>
                <td class="d-none d-sm-block">{{$article->price}} €</td>
                <td class="d-flex">
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
    </div>
    </div>
</div>
</x-layout>