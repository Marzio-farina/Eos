<div class="row justify-content-center">
    <div class="col-10 text-center">
        @foreach ($filteredCampiCommittenza as $item)
            @foreach ($item as $key => $filteredCampoCommittenza)
                @if ($key !== 'id')
                    <button>{{ $key }}</button>
                @endif
            @endforeach
        @endforeach
    </div>
</div>
