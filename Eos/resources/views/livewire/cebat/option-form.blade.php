<div class="row opzioneVidimazione">
    <div class="col-7">
        @if($showForm)
            <form wire:submit.prevent="{{ $selectedOption ? 'update' : 'store' }}">
                <div class="inputNuovoOperatore">
                    <label>{{$testoCampo1}} :</label>
                    <input type="text" wire:model="valoreCampo1">
                </div>
                <div class="inputNuovoOperatore">
                    <label>Cognome:</label>
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

