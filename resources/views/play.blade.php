@extends('base')
@section('app')
    <div class="title">De QR-Code-Game!</div>
    <div class="qr-code-grid">
        @foreach($students as $student)
            <div class="qrcode">
                {{ QrCode::generate("https://qr-code-game.dev/$student->studentnumber") }}
            </div>
        @endforeach
    </div>
@endsection
