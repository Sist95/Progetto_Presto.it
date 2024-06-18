<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Conferma la tua mail</h1>
                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        A new email verification link has been emailed to you!
                    </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="/email/verification-notification">
                    @csrf
                   
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Conferma</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>