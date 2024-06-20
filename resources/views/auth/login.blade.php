<x-layout>

    <div class="container mt-5  col-md-12 cardMorph cardMorph-inner">
    
        <div class="row justify-content-center">
            <div class="col-12  text-center">
                <h1 class="display-4 pt-5">Accedi</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
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
                    <div class="d-flex justify-content-between ">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="remember">
                            <label class="form-check-label">Ricordati di me</label>
                        </div>
                        <span><a href="{{route('password.request')}}">Password dimenticata?</a></span>
                    </div>
                    <div class="d-flex justify-content-center mt-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>