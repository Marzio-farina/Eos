<div class="row">
    <div class="col-12 col-md-5 col-xl-3">
        <div class="p-3 SottoContenitoreCardDashboard ContenitoreColoreBlu">
            <a class="SottoContenitoreCardDashboardSopra" href="{{route('Utenti.index')}}">
                <span class="ContenitoreIconaCardDashboard ContenitoreIconaColoreBLu">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                        <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg>
                </span>
                <span class="ContenitoreDescrizioneIconaCardDashboard ContenitoreDescrizioneColoreBlu">
                    Utenti registrati
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    @foreach ($users as $user)
                        
                    @endforeach 
                    <div class="col-6">
                        <span>{{$user->where('is_admin',0)->count()}}</span>
                        <p>Base</p>
                    </div>
                    <div class="col-6">
                        <span>{{$user->where('is_admin',1)->count()}}</span>
                        <p>Admin</p>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-xl-3">
        <div class="p-3 SottoContenitoreCardDashboard ContenitoreColoreCelste">
            <a class="SottoContenitoreCardDashboardSopra" href="#">
                <span class="ContenitoreIconaCardDashboard ContenitoreIconaColoreCeleste">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-receipt" viewBox="0 0 16 16">
                        <path d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27m.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0z"/>
                        <path d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5m8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5"/>
                    </svg>
                </span>
                <img class="LogoCebat" src="/image001-4-2.png" alt="Cebat S.p.A.">
                <span class="ContenitoreDescrizioneIconaCardDashboard ContenitoreDescrizioneColoreBlu">
                    Recap
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>4</span>
                        <p>In corso</p>
                    </div>
                    <div class="col-6">
                        <span>2</span>
                        <p>Concluse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-xl-3">
        <div class="p-3 SottoContenitoreCardDashboard ContenitoreColoreCelste">
            <a class="SottoContenitoreCardDashboardSopra" href="{{route('orders.index')}}">
                <span class="ContenitoreIconaCardDashboard ContenitoreIconaColoreCeleste">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2z"/>
                        <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0M7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0"/>
                    </svg>
                </span>
                <img class="LogoCebat" src="/image001-4-2.png" alt="Cebat S.p.A.">
                <span class="ContenitoreDescrizioneIconaCardDashboard ContenitoreDescrizioneColoreBlu">
                    Commesse
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>{{$commesseCebat->where('stato',1)->count()}}</span>
                        <p>Inconcluse</p>
                    </div>
                    <div class="col-6">
                        <span>{{$commesseCebat->where('stato',3)->count()}}</span>
                        <p>Concluse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-12 col-md-5 col-xl-3">
        <div class="p-3 SottoContenitoreCardDashboard ContenitoreClienti">
            <a class="SottoContenitoreCardDashboardSopra" href="#">
                <span class="ContenitoreIconaCardDashboard ContenitoreIconaClienti">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
                    </svg>
                </span>
                <span class="ContenitoreDescrizioneIconaCardDashboard ContenitoreDescrizioneIconaClienti">
                    Clienti
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>8178</span>
                        <p>Attivi</p>
                    </div>
                    <div class="col-6">
                        <span>25402</span>
                        <p>Registrati</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-5 col-xl-3">
        <div class="p-3 SottoContenitoreCardDashboard ContenitoreCommenti">
            <a class="SottoContenitoreCardDashboardSopra" href="#">
                <span class="ContenitoreIconaCardDashboard ContenitoreIconaCommenti">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat" viewBox="0 0 16 16">
                        <path d="M2.678 11.894a1 1 0 0 1 .287.801 11 11 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8 8 0 0 0 8 14c3.996 0 7-2.807 7-6s-3.004-6-7-6-7 2.808-7 6c0 1.468.617 2.83 1.678 3.894m-.493 3.905a22 22 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a10 10 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9 9 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105"/>
                    </svg>
                </span>
                <span class="ContenitoreDescrizioneIconaCardDashboard ContenitoreDescrizioneIconaCommenti">
                    Commenti
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>12</span>
                        <p>Nuovi</p>
                    </div>
                    <div class="col-6">
                        <span>85</span>
                        <p>Risposti</p>
                    </div>
                </div>
            </div>
        </div> 
    </div> --}}
</div>