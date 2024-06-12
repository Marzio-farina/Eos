<div class="buttonCommittenza">
    @foreach ($committenze as $committenza)
        <button>
            {{$committenza->nome}}
        </button>
    @endforeach
</div>

<livewire:cebat.unilav/>