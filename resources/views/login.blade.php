@extends('base')
@section('app')
    <h1 class="login-title">Log in met jouw studenten-nummer</h1>
    <div class="login">
        <input type="text" class="d-nummer" name="studenten-nummer" placeholder="Bijv. D696969">
        <a href="/play" class="login-btn">Login</a>
    </div>
@endsection
