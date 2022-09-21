@extends('base')
@section('app')
    <h1 class="login-title">Log in met jouw studenten-nummer</h1>
    <div class="login">

        <form method="post" action="/play">
            @csrf
            <input type="text" class="d-nummer" name="studenten-nummer" placeholder="Bijv. D696969">
            <input type="submit" class="login-btn" value="Login">
        </form>

    </div>
@endsection
