<x-layout>

    <h1>Recupera la tua password</h1>

    @if(session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{session('status')}}
        </div>
    @endif 

    <form method="POST" action="{{route('password.email')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            @error('email')
                <span>{{$message}}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Recupera</button>
    </form>

</x-layout>