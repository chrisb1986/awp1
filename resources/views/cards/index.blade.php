<!-- Show cards. -->
@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h1>All Cards</h1>
    @foreach  ($cards as $card)
    <div>
      <a href="/cards/{{ $card->id }}">{{ $card->title }}</a>
    </div>
@endforeach
</div>
@stop
