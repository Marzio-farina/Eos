<x-navbar/>
<x-layout>
    <x-navigazione/>
    @if (Route::is('impostazioni'))
        <livewire:impostazioni/>
    @else
        <div class="container">
            <x-Dashboard.card/>
        </div>
    @endif
    
</x-layout>
