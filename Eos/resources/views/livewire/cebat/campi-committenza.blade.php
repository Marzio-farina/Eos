<div class="row justify-content-center">
    <div class="col-10 text-center opzioneVidimazione">
        <select>
            <option value="" selected disabled></option>
            @foreach ($filteredCampiCommittenza as $key => $value)
                <option value="{{ $key }}">{{ $key }}</option>
            @endforeach
        </select>
    </div>
</div>
