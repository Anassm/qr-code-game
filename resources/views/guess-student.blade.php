@extends('base')
@section('app')
@if($errors->any())
            <ul class="errors">@foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
 @endif
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
   
            <form action="{{ $baseurl  }}{{$studentlink}}/{{$id}}" method="POST">
            @csrf
            @method('put')
            
        @foreach($studentsnames as $student)
            @if($student->id == $questionrecord->student_id)
                <?php
                    $score = 1
                ?>
                @else
                <?php
                    $score = 0
                ?>
            @endif
            <div class="mobile-names">
              <input type="radio" value="{{$score}}" id="student_radio" name="score">
              <label for="student"> {{ $student->firstname }} {{ $student->lastname }}</label>
            </div>
        @endforeach
        </div>
    <input type="hidden" value="{{$id}}" name="hiddenid">
    <input type="submit" value="Versuur" class="mobile-submit">

    </form>


@endsection
