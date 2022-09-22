@extends('base')
@section('app')
    <h1 class="login-title">Log in met jouw studenten-nummer</h1>
    <div class="login">

        <form method="post" action="/play">
            @csrf
            <input type="text" class="d-nummer" name="studententnr" placeholder="Bijv. D696969">
            <input type="submit" class="login-btn" value="Login">
        </form>
        @if (session()->has('loginerror') || (session()->has('login')))
            <center>
                <div>
                    <p style="border-radius: 10px; padding: 20px; background: red; color:white; width: 30rem;">
                        <b>{{ session()->get('loginerror') }}</b>
                    </p>
                </div>
            </center>
        @endif
    </div>
@endsection
