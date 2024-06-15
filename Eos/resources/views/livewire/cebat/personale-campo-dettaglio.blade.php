<div class="row opzioneVidimazione">
    <div class="col-7">
        @if($showFormAdd)
            <form wire:submit="store">
                <div class="inputNuovoOperatore">
                    <label for="name">Nome:</label>
                    <input type="text" wire:model.change="nome">
                </div>
                <div class="inputNuovoOperatore">
                    <label for="name">Cognome:</label>
                    <input type="text" wire:model.change="cognome">
                </div>
                <div class="text-center">
                    <button type="submit">
                        Crea
                    </button>
                </div>
            </form>
            <p>prova</p>
        @elseif($showFormEdit)
            <form wire:submit.prevent="update">
                <div class="inputNuovoOperatore">
                    <label for="name">Nome:</label>
                    <input type="text" wire:model="nome">
                </div>
                <div class="inputNuovoOperatore">
                    <label for="name">Cognome:</label>
                    <input type="text" wire:model="cognome">
                </div>
                <div class="text-center">
                    <button type="submit">
                        Modifica
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>