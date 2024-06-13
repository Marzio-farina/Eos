<div class="row">
    <div class="col-10 text-center opzioneVidimazione">
        <select wire:model="selectedKey" wire:change="filterDettaglio">
            <option value="" selected disabled></option>
            @foreach ($filteredCampiCommittenza as $key => $value)
                <option value="{{ $key }}">{{ $key }}</option>
            @endforeach
        </select>
    </div>
</div>
