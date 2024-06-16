<div class="row opzioneVidimazione">
    <div class="col-7">
        @if($showForm)
            <form wire:submit.prevent="{{ $selectedOption ? 'update' : 'store' }}">
                <div class="inputNuovoOperatore">
                    <label for="nome">Nome:</label>
                    <input type="text" wire:model="nome">
                </div>
                <div class="inputNuovoOperatore">
                    <label for="cognome">Cognome:</label>
                    <input type="text" wire:model="cognome">
                </div>
                <div class="text-center">
                    <button type="submit">
                        {{ $selectedOption ? 'Modifica' : 'Crea' }}
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>

