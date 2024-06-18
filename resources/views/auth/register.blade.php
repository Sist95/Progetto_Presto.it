<x-layout>

    <h1>Registrati adesso</h1>

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

        <button type="submit" class="btn btn-primary">Registrati</button>
    </form>

</x-layout>