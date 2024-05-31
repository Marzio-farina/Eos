<x-layout>
    <div class="homeRegister">
        <div class="register">
            <form method="POST" action="{{route('password.email')}}">
                @csrf
                <a class="torna_indietro_forgot_password" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                    </svg>
                </a>
                <h4>Reset password</h4>
                <div>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <button type="submit" id="registrati">Recupera password</button>
            </form>
        </div>        
    </div>
</x-layout>