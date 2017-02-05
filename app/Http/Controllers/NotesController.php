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

      // Method 4 - simplest, cleanest method.
      // $card->notes()->create($request->all());

      // Method 5 - uses public function from Card.php.
      $card->addNote(
        new Note($request->all())
      );
      
      return back();
    }
}
