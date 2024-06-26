<x-layout>

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
</x-layout>