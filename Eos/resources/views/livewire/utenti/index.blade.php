<div class="container pt-4 ">
    <div class="filtraUtenti">
        <h5>Lista degli utenti</h5>
        <form class="d-flex" role="search">
            <input class="me-2" type="search">
            <button class="btn btn-outline-success" type="submit">Filtra</button>
        </form>
    </div>
    <div class="pt-2 ">
        {{$users->links()}}
        <table class="table table-hover table-bordered">
            <thead>
                <tr class="fontColonneUser">
                    <th scope="col">ID</th>
                    <th scope="col">Utenti</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Stato</th>
                    <th scope="col">Autorizzazioni</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>Otto</td>
                        <td>Otto</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</div>
