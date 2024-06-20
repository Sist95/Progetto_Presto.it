<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4">Registrati adesso</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="/register">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @error('name')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cognome</label>
                        <input type="text" class="form-control" name="surname" value="{{old('surname')}}">
                        @error('surname')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @error('email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        @error('password')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-primary mb-4">Registrati</button>
                    </div>             
                </form>
            </div>
        </div>
    </div>
</x-layout>