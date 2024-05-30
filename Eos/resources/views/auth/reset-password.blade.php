<x-layout>
    <div class="homeLogin">
        <div class="login">
            <h1>Reset password</h1>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="/reset-password">
                @csrf     
                <input type="hidden" name="token" value="{{request()->route('token')}}"> 
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                </div>                                    
                <input type="password" name="password" id="password" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror  
                <div class="mb-3">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Conferma password">
                </div>         
                <input type="submit" name="Accedi" id="accedi" value="Recupera">
            </form>
        </div>
    </div>
</x-layout>