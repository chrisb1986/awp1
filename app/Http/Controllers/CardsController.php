<?php

namespace App\Http\Controllers;

//use DB;
use App\Card;
use Illuminate\Http\Request;

class CardsController extends Controller
{
   public function index()
   {
     // $cards=DB::table('cards')->get();
     $cards=Card::all();
     return view('cards.index', compact('cards'));
   }

  //  public function show(Card $card)
  //  {
  //     // $card = Card::with('notes.user')->find(1); // n +1 problem.
  //     $card->load('notes.user');
  //     // return $card;
   //
  //     return view('cards.show', compact('card'));
  //  }
   //
  //  public function create(Request $request){
  //    $this->validate($request, ['title'=>'required|min:2']);
   //
  //    $card = new Card;
  //    $card->title = $request->title;
  //    $card->save();
   //
  //    return back();
  //  }
  //  public function delete(Card $card){
  //    foreach ($card->notes as $note) {
  //      $note->delete();
  //    }
   //
  //    $card->delete();
   //
  //    return back();
  //  }
}
