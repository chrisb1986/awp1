<!-- Show cards. -->
@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>All Cards</h1>
    @foreach  ($cards as $card)
      <ul class="list-group">
        <li class="list-group-item">
          <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
          <a href="/cards/{{ $card->id }}/delete" class="pull-right">Delete</a>
        </li>
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
    @if (count($errors))
      <ul class="errors">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </div> <!-- End col-md-6 col-md-offset-3. -->
</div> <!-- End row. -->
@stop
