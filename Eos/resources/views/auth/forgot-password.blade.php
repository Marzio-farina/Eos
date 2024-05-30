<x-layout>
    <div class="homeRegister">
        <div class="register">
            <form method="POST" action="{{route('password.email')}}">
                @csrf
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