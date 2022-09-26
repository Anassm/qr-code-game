@extends('base')
@section('app')
<!-- CSS only -->



<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  spel uitleg
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">spel uitleg</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        uitleg
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<script>
var exampleModal = new bootstrap.Modal(document.getElementById('exampleModal'), {})
exampleModal.show()
</script>


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
