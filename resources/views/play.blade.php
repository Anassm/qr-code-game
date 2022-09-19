@extends('base')
@section('app')
    <div class="title">De QR-Code-Game!</div>
    <div class="qr-code-grid">
        @foreach()
            <div class="qrcode">
                @php
                    $url = "https://qr-code-game.dev/$studentnr";
                @endphp
                {{ QrCode::generate($url) }}
            </div>
        @endforeach
    </div>
@endsection
