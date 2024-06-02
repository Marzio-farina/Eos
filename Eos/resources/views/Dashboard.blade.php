<x-navbar/>
<x-layout>
    <x-navigazione/>
    @if (Route::is('impostazioni'))
        <livewire:impostazioni/>
    @else           
        <x-Dashboard.card :users="$users" :commesseCebat="$commesseCebat"/>
    @endif
    
</x-layout>
