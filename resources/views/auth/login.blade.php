<x-layout>

    <h1>Accedi</h1>

    @if(session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{session('status')}}
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
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

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" name="remember">
            <label class="form-check-label">Ricordati di me</label>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        <a href="{{route('password.request')}}">Password dimenticata?</a>
        
    </form>

</x-layout>