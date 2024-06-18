<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Recupera la tua password</h1>
                @if(session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{session('status')}}
                    </div>
                @endif 
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('password.email')}}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Indirizzo email</label>
                        <input type="email" class="form-control" name="email" value="{{old('email')}}">
                        @error('email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Recupera</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>