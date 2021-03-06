<!-- Show notes. -->
@extends('layout')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h1>{{ $card->title }}</h1>
      <ul class="list-group">
        @foreach ($card->notes as $note)
          <a href="/notes/{{ $note->id }}/edit"> <!-- Displays the note and note body is edit link. -->
            <li class="list-group-item">{{ $note->body }}
              <a href="#" class="pull-right">{{ $note->user->name }}</a> <!-- Displays user who inputted the note. -->
            </li>
          </a>
        @endforeach
      </ul>
      <hr>
      <h3>Add a New Note</h3>
        <form method="POST" action="/cards/{{ $card->id }}/notes">
          {{ csrf_field() }}
          <!-- <input type="hidden" name="user_id" value="1"> -->
          <div class="form-group">
            <textarea name="body" class="form-control">{{ old('body') }}</textarea>
          </div> <!-- End form-group div class. -->
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Note</button>
          </div> <!-- End form-group class. -->
        </form>
        <a href="/cards/">Go back to All Cards.</a>
        @if (count($errors))
          <ul class="errors">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif
        <!-- {{ var_dump($errors) }} -->
      </div> <!-- End col-md-6 col-md-offset-3. -->
    </div> <!-- End row. -->
@stop
