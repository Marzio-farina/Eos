<div class="container mt-4">    
    <div class="row">
        <h5 class="text-center">Impostazioni</h5>
        <aside class="col-3 pagineUtente">
            <p>Dati anagrafici</p>
            <span class="separatoreCasisticheUtente"></span>
            <p>Reset password</p>
            <span class="separatoreCasisticheUtente"></span>
            <p>Impostazioni</p>
            <span class="separatoreCasisticheUtente"></span>
        </aside>
        <main class="col-9 dettagliUtente">
            <header>
                <h6>
                    Dati anagrafici
                </h6>
            </header>
            <div class="row">
                <div class="col-3">
                    <div class="row">
                        <span>
                            ID :
                        </span>
                        <span>
                            Username :
                        </span>
                        <span>
                            Nome :
                        </span>
                        <span>
                            Cognome :
                        </span>
                        <span>
                            Email :
                        </span>
                        <span>
                            Registrato in data :
                        </span>
                    </div>
                    
                </div>       
                <div class="col-6">
                    <div class="row">
                        <span>
                            {{$user->id}}
                        </span>
                        <span>
                            {{$user->name}}
                        </span>
                        <span>
                            {{$user->name}}
                        </span>
                        <span>
                            {{$user->name}}
                        </span>
                        <span>
                            {{$user->email}}
                        </span>
                        <span>
                            {{$user->created_at}}
                        </span>

                    </div>
                    
                </div>
            </div>
        </main>
    </div>
</div>
