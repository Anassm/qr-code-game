@extends('base')
@section('app')
    <div class="title">De QR-Code-Game!</div>
    <div class="qr-code-grid">
        <div class="qrcode">
            <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(250)->eye('square')->color(40, 167, 69)->generate($url)) }}" alt="QR-code">
        </div>
        </div>
        <div class="qrcode">
            dsfll
        </div>
        <div class="qrcode">
            dsfll
        </div>        <div class="qrcode">
            dsfll
        </div>

    </div>
@endsection
