<x-layout>

    <h1>Reset della password</h1>

    <form method="POST" action="/reset-password">
        @csrf

        <input type="hidden" name="token" value="{{request()->route('token')}}">

        <div class="mb-3">
            <label class="form-label">Indirizzo email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
            @error('email')
                <span> {{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" name="password">
            @error('password')
                <span> {{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Conferma password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-primary">Reset Password</button>

    </form>

</x-layout>