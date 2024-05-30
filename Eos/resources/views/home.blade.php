<x-layout>
    @guest
        <div class="homeLogin">
            <div class="login">
                <h1>Login</h1>
                <form method="POST" action="/login">
                    @csrf
                    <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror                            
                    <input type="password" name="password" id="password" placeholder="Password">
                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>
                    @enderror  
                    <div class="Check_recuperaPassword">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                        </div>

                        <a href="{{route('password.request')}}">Reset password</a>
                    </div>                 
                    <input type="submit" name="Accedi" id="accedi" value="Accedi">
                </form>
            </div>
        </div>
    @endguest
    @auth
        <script>window.location = "/Dashboard";</script>
    @endauth
</x-layout>