{{-- Modale per l'Edit dell'Username --}}
<form wire:submit.prevent="store">
    <div class="modal" id="EditUsername" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modifica dell'Username</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <p>
                            L'Username attuale è :
                        </p>
                        <p>
                            Nuovo Username :
                        </p>
                    </div>
                    <div >
                        <p id="DatoModale">
                            {{$user->name}}
                        </p>                
                        <input type="text" name="name" value="{{$user->name}}">
                    </div>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancella</button>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </div>
            </div>
        </div>
    </div>
</form>
