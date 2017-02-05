<?php

namespace App\Http\Controllers;

use DB;
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

  public function show(Card $card)
  {
     // $card = Card::with('notes.user')->find(1); // n + 1 problem.
     $card->load('notes.user');
     return view('cards.show', compact('card'));
  }
}
