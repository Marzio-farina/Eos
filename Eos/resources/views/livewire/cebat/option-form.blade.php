<div class="row opzioneVidimazione">
    <div class="col-8 ">
        @if($showForm)
            <form wire:submit.prevent="{{ $campi && $campi[0]['value'] ? 'update' : 'store' }}">
                @foreach($campi as $campo)
                    @if($campo['label'])
                        <div class="inputNuovoOperatore">
                            @if ($campo['value'] == 1 || $campo['value'] == 0 || ( $campo['value'] == "" && $campo['label'] == "Presenza2"))
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" {{ $campo['value'] == 0 || $campo['value'] == "" ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary" for="btnradio1">Assente</label>
                            
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" {{ $campo['value'] == 1 ? 'checked' : '' }}>
                                <label class="btn btn-outline-primary" for="btnradio2">Presente</label>                   
                            @else
                                <label>{{ $campo['label'] }} :</label>
                                <input type="text" wire:model.lazy="campo['value']" value="{{$campo['value']}}">
                            @endif                            
                        </div>
                    @endif
                @endforeach
                @if ($campo['value'] == 1 || $campo['value'] == 0 || ( $campo['value'] == "" && $campo['label'] == "Presenza2"))
                    
                @else  
                    <div class="text-center">
                        <button type="submit">
                            {{ $campi && $campi[0]['value'] ? 'Modifica' : 'Crea' }}
                        </button>
                    </div>
                @endif
            </form>
        @endif
    </div>
</div>
