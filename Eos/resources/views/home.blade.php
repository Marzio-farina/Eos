<x-layout>
    <div class="homeLogin">
        <div class="login">
            <h1>Login</h1>
            <form method="POST" action="{{route('login')}}">
                @csrf
                <input type="email" name="Email" id="email" placeholder=" Email">        
                <input type="password" name="Password" id="password" placeholder=" Password">
                <input type="submit" name="Accedi" id="accedi" value="Accedi">
            </form>
        </div>
    </div>
</x-layout>