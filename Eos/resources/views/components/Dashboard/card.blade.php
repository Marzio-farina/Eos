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
                    CO.SI.
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>N.N.</span>
                        <p>Inconcluse</p>
                    </div>
                    <div class="col-6">
                        <span>N.N.</span>
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
                    Integra
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>N.N.</span>
                        <p>Inconcluse</p>
                    </div>
                    <div class="col-6">
                        <span>N.N.</span>
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
                    Pigae
                </span>
            </a>
            <div class="container SottoContenitoreCardDashboardSotto">
                <div class="row">
                    <div class="col-6">
                        <span>N.N.</span>
                        <p>Inconcluse</p>
                    </div>
                    <div class="col-6">
                        <span>N.N.</span>
                        <p>Concluse</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>