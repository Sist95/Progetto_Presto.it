<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1">I nostri annunci</h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non sono ancora presenti annunci</h3>
                </div>
            @endforelse
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>
</x-layout>