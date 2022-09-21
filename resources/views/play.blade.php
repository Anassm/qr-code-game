@extends('base')
@section('app')
<div class="title">De QR-Code-Game!</div>
<div class="qr-code-grid">
    @foreach($students as $student)
    <div class="studenten">
        {{ QrCode::generate("https://qr-code-game.dev/$student->studentnumber") }}
        <label class="studentnr">{{ $student->id }}</label>
    </div>
    @endforeach
</div>
@endsection
