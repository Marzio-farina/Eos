<x-navbar/>
<x-layout>
    <x-navigazione/>
    <div class="container pt-4">
        <div class="filtraUtenti">
            <h5>Lista degli utenti</h5>
            <form class="d-flex" role="search">
                <input class="me-2" type="search">
                <button class="btn btn-outline-success" type="submit">Filtra</button>
            </form>
        </div>
        <x-Utenti.tabella/>
    </div>
</x-layout>