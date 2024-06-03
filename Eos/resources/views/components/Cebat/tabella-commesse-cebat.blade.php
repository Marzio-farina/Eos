<table class="table table-hover table-bordered">
    <thead>
        <tr class="fontColonnaUser">
            <th scope="col">ID</th>
            <th scope="col">SubAppaltatrice</th>
            <th scope="col">commessa</th>
            <th scope="col">ricevuta richiesta</th>
            <th scope="col">invio richiesta</th>
            <th scope="col">sollecito n.1</th>
            <th scope="col">sollecito n.2</th>
            <th scope="col">sollecito n.3</th>
            <th scope="col">sollecito n.4</th>
            <th scope="col">sollecito n.5</th>
            <th scope="col">stato</th>
            <th scope="col">Invio al CSE</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach ($commesseCebat as $commessaCebat)
            <tr class="fontColonnaUser">
                <td>{{$commessaCebat->id}}</td>
                <td>{{$commessaCebat->subAppaltatrice}}</td>
                <td>{{$commessaCebat->commessa}}</td>
                <td>{{$commessaCebat->invioRichiesta}}</td>
                <td>{{$commessaCebat->ricevutaRichiesta}}</td>
                <td>{{$commessaCebat->sollecito1}}</td>
                <td>{{$commessaCebat->sollecito2}}</td>
                <td>{{$commessaCebat->sollecito3}}</td>
                <td>{{$commessaCebat->sollecito4}}</td>
                <td>{{$commessaCebat->sollecito5}}</td>
                <td>{{$commessaCebat->stato}}</td>
                <td>{{$commessaCebat->dataInvioAlCSE}}</td>
                <td >
                    <a href="#" class="tabellaCommesseCebatAzioni">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </a>
                    <a href="#" class="tabellaCommesseCebatAzioni">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                        </svg>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>