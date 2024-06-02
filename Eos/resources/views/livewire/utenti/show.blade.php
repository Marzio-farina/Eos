<div class="container mt-4">  
    <div class="row">
        <h5 class="text-center">Impostazioni</h5>
        <aside class="col-3 pagineUtente">
            <p>Dati anagrafici</p>
            <span class="separatoreCasisticheUtente"></span>            
            <p>Impostazioni</p>
            <span class="separatoreCasisticheUtente"></span>
            <p>Reset password</p>
            <span class="separatoreCasisticheUtente"></span>
            <p>Cancella Utente</p>
            <span class="separatoreCasisticheUtente"></span>
        </aside>
        <main class="col-9 dettagliUtente">
            <div class="row">
                <h6 class="col-11">
                    Dati anagrafici
                </h6>  
                <a href="{{route('Utenti.index')}}" class="col-1 closeImpostazioniUtente">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5"/>
                    </svg> 
                </a>    
            </div>                   
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
                        <div>
                            <span>{{$user->id}}</span>                                            
                        </div>
                        <div>
                            <livewire:utenti.edit :user="$user"/>                            
                        </div>
                        <div>
                            <span>{{$user->name}}</span>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a> 
                        </div>
                        <div>
                            <span>{{$user->name}}</span>
                            <a>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </a> 
                        </div>
                        <div>
                            <span>{{$user->email}}</span>
                        </div>
                        <div>
                            <span>{{$user->created_at}}</span>
                        </div>
                    </div>                    
                </div>
            </div>
        </main>        
    </div>
    {{-- <livewire:utenti.edit :user="$user"/> --}}
</div>


