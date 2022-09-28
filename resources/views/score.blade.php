@extends('base')
@section('app')


<style>
html { background: ;   
  display:flex;
    justify-content: center;
    align-items: center;}
section {
  background: ;
  color: black;


  }
</style>

<section>
  <h1 style="text-align:center"> score: {{$scores->aantal}}/12 </h1>
  <h1 style="text-align:center">Naam: {{$students->firstname}} {{$students->lastname}}</h1>

</section>




@endsection