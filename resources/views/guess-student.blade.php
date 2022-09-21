@extends('base')
@section('app')
    <div class="verhaal">
        <h1>Dit is student: {{$studentrecord->firstname}} {{ $studentrecord->lastname }}</h1>
    </div>

@endsection
