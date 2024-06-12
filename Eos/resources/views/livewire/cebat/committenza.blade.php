<div class="buttonCommittenza">
    @foreach ($committenze as $index => $committenza)
        <button class="committenza-btn" wire:click="changeColor({{ $index }})" style="background-color: {{ $selectedButton === $index ? '#1EA9DA' : 'white' }}">
            {{$committenza->nome}}
        </button>
    @endforeach 
</div>
