<!-- Edit Notes. -->
@extends('layout')

@section('content')
<div class="row">
  <div class="col-md-6 col-md-offset-3">
  <h1>Edit the Note</h1>

  <form method="POST" action="/notes/{{ $note->id }}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="form-group">
      <!-- <textarea name="body" class="form-control">{{ $note->body }}</textarea> -->
      <!-- Note as placeholder when editing. -->
      <textarea name="body" class="form-control" placeholder="{{ $note->body }}">{{ old('body') }}</textarea>
    </div> <!-- End form-group. -->

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Note</button>
    </div> <!-- End form-group. -->
  </form>
  <a href="javascript:history.back()">Go back to All Notes.</a>
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
