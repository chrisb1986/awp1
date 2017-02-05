<?php

namespace App\Http\Controllers;

use App\Card;
use App\Note;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
      // Method 1.
      // $note = new Note;
      // $note->body = $request->body;
      // $card->notes()->save($note);

      // Method 2.
      // $card->notes()->save(
      //   new Note(['body' => $request->body])
      // );

      // Method 3.
      // $card->notes()->create([
      //   'body' => $request->body
      // ]);

      // Method 4.
      // $card->notes()->create($request->all());

      // Method 5 - uses public function from Card.php.
      // $card->addNote(
      //   new Note($request->all())
      // );

      // Method 5 with validation.
      $this->validate($request, [
        'body' => 'required|min:2'
      ]);
      $note = new Note($request->all());
      // $note->by(Auth::user());
      // $note->user_id = 1;
      $card->addNote($note, 1);

      return back();
    }

    public function edit(note $note)
    {
      return view('notes.edit', compact('note'));
    }

    public function update(Request $request, note $note, card $card)
    {
      $this->validate($request, [
        'body' => 'required|min:2'
      ]);
      $note->update($request->all());
      // return back();
      return redirect('/cards/'.$note->card()->first()->id);
    }
}
