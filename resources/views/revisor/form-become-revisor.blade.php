<x-layout>
    <div class="container mt-5 cardMorph cardMorph-inner">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 my-4">{{__('ui.Lavora')}}</h1>
                @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="/form-revisor">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Nome')}}</label>
                        <input type="text" class="cardInputMorph form-control" name="name" value="{{old('name')}}">
                        @error('name')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Cognome')}}</label>
                        <input type="text" class="cardInputMorph form-control" name="surname" value="{{old('surname')}}">
                        @error('surname')
                            <span>{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">{{__('ui.Indirizzo_email')}}</label>
                        <input type="email" class="cardInputMorph form-control" name="email" value="{{old('email')}}">
                        @error('email')
                            <span>{{$message}}</span>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center mt-3">
                        <a href="{{route('become.revisor')}}" class="buttonCustomPrimary text-decoration-none my-4">{{__('ui.Revisore')}}</a>
                    </div>             
                </form>
            </div>
        </div>
    </div>
</x-layout>