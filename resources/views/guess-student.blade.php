@extends('base')
@section('app')
<div class="mobile-verhaal">
    <div class="mobile-header">Dit is student #{{$questionrecord->student_id}} </div>
        <h3>De vraag is:</h3><br>
        {{$questionrecord->question}}<br>
        


        <div class="mobile-radio">
        @foreach($studentsnames as $student)

            <div class="mobile-names">
              <input type="radio" value="{{ $student->id }}" id="student_radio">
              <label for="student"> {{ $student->firstname }} {{ $student->lastname }}</label>
            </div>
        @endforeach
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

    <a href="{{ $baseurl  }}{{$studentlink}}/{{$id}}" class="mobile-submit" type="submit">Verstuur</a>
 

@endsection
