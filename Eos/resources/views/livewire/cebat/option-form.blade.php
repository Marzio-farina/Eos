<div class="row opzioneVidimazione">
    <div class="col-7">
        @if($showForm)
            <form wire:submit.prevent="{{ $campi && $campi[0]['value'] ? 'update' : 'store' }}">
                @foreach($campi as $campo)
                    @if($campo['label'])
                        <div class="inputNuovoOperatore">
                            <label>{{ $campo['label'] }} :</label>
                            <input type="text" wire:model.lazy="campo['value']" value="{{$campo['value']}}">
                        </div>
                    @endif
                @endforeach
                <div class="text-center">
                    <button type="submit">
                        {{ $campi && $campi[0]['value'] ? 'Modifica' : 'Crea' }}
                    </button>
                </div>
            </form>
        @endif
    </div>
</div>
