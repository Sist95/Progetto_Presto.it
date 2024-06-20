<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4">Conferma la tua mail</h1>
                @if (session('status') == 'verification-link-sent')
                    <div class="alert alert-success" role="alert">
                        La mail di verifica è stata inviata!
                    </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="/email/verification-notification">
                    @csrf
                   
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary mb-4">Conferma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>