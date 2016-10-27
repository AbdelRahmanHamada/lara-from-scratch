<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;

class cardsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
      $cards = Card::all();
      return view('cards.index',['cards'=>$cards]);
    }

    public function show(Card $card){

        $card->load('notes.user');

      return view('cards.show',['card'=>$card]);
    }
}
