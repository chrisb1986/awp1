<!-- Show notes. -->
@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
      <h1>{{ $card->title }}</h1>
      <ul class="list-group">
              @foreach ($card->notes as $note)
                  <li class="list-group-item">{{ $note->body }}
                  </li>
                </a>
          @endforeach
        </ul>

        <hr>
      <h3>Add a New Note</h3>
        <form method="POST" action="/cards/{{ $card->id }}/notes">
          <div class="form-group">
            <textarea name="body" class="form-control">{{ old('body') }}</textarea>
          </div> <!-- End form-group div class. -->
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Note</button>
          </div> <!-- End form-group class. -->
        </form>
      </div> <!-- End col-md-6 col-md-offset-3. -->
</div> <!-- End row. -->
@stop
