<x-navbar/>
<x-layout>
    <x-aside/>
    @if (Route::is('impostazioni'))
      <livewire:impostazioni/>
    @else
        <div class="container">
            <x-card/>
        </div>
    @endif
    
</x-layout>
