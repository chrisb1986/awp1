<!-- Show cards. -->
@extends('layout')

@section('content')
  <h1>All Cards</h1>

  @foreach ($cards as $card)
    <ul>
      <li><a href="/cards/{{ $card->id }}">{{ $card->title }}</a></li>
    </ul>
  @endforeach
  <h3>Add a New Card</h3>
  <form action="/cards" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <textarea name="title" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Card</button>
    </div>
  </form>
@stop
