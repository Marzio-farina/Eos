<x-layout>
    <div class="homeRegister">
        <div class="register">
            <form method="POST" action="/register">
                @csrf
                <h1>Registrati</h1>
                <div>
                    <div class="mb-3">
                        <input 
                            type="text" 
                            class="form-control" 
                            name="name" 
                            value="{{old('name')}}"
                            placeholder="Username">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input 
                            type="email" 
                            class="form-control" 
                            name="email" 
                            value="{{old('email')}}"
                            placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input 
                            type="password" 
                            class="form-control" 
                            name="password"
                            placeholder="Password">
                        @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input 
                            type="password" 
                            class="form-control" 
                            name="password_confirmation"
                            placeholder="Conferma password">
                    </div>
                </div>
                <button type="submit" id="registrati">Registrati</button>
            </form>
        </div>        
    </div>
</x-layout>