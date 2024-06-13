<div class="row justify-content-center">
    <div class="col-10 text-center opzioneVidimazione">
        <select>
            <option value="" selected disabled></option>
            @foreach ($filteredCampiCommittenza as $item)
                @foreach ($item as $key => $filteredCampoCommittenza)
                    @if ($key !== 'id')
                        <option value="{{ $key }}">{{ $key }}</option>
                    @endif
                @endforeach
            @endforeach
        </select>
    </div>
</div>
