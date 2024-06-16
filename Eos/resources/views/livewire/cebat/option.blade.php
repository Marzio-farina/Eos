<div class="row">
    <div class="col-8 text-center opzioneVidimazione">
        <select wire:change="optionForm($event.target.value)">
            <option value="" selected disabled></option>
            @foreach ($option as $key)
                <option value="{{ $key }}">{{ $key }}</option>
            @endforeach
        </select>
    </div>
</div>
