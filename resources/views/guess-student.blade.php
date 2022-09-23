@extends('base')
@section('app')
    <div class="verhaal">
        <h1>Dit is student: {{$studentrecord->firstname}} {{ $studentrecord->lastname }}</h1>
    </div>
    <?php
        $studentlink = "/student";
        $id = $studentrecord->id +1;
        $baseurl = env('APP_URL');
    ?>
    @if($id == 13)
      <?php
      $studentlink = "";
      $id = "resultaat";
      ?>

    @endif

    <a href="{{ $baseurl  }}{{$studentlink}}/{{$id}}">Ga verder</a>
@endsection
