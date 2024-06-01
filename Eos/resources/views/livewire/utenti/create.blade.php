<div class="container pt-4">
    <form class="d-flex flex-column align-items-center" wire:submit.prevent="store">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>        
        @endif
        <h5>Registra un utente</h5>
        <div class="pt-2">
            <div class="mb-3">
                <input type="text" class="form-control" wire:model.change="name" value="{{old('name')}}" placeholder="Username">
                @error('name')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" wire:model.change="email" value="{{old('email')}}" placeholder="Email">
                @error('email')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" wire:model.change="password" placeholder="Password">
                @error('password')
                    <div class="alert alert-danger" role="alert">
                        {{$message}}
                    </div>
                @enderror
            </div>
        </div>
        <button type="submit" id="registrati">Registra utente</button>
    </form>
</div>
