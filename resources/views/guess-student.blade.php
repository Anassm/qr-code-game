@extends('base')
@section('app')
<div class="mobile-verhaal">
    <div class="mobile-header">Dit is student #{{$questionrecord->student_id}} </div>
        <h3>De vraag is:</h3><br>
        {{$questionrecord->question}}<br>


        
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
        <div class="mobile-radio">

            <form action="{{ $baseurl  }}{{$studentlink}}/{{$id}}">
            @csrf
            @method('put')
            
        @foreach($studentsnames as $student)

            <div class="mobile-names">
              <input type="radio" value="{{ $student->id }}" id="student_radio">
              <label for="student"> {{ $student->firstname }} {{ $student->lastname }}</label>
            </div>
        @endforeach
        </div>

    <input type="hidden" value="0" name="score">
    <input type="submit" value="Versuur" class="mobile-submit">

    </form>


@endsection
