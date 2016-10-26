<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;

class notesController extends Controller
{
  public function store(Request $request, Card $card){
      /*$request->all();
      $note = new Note;
      $note->body = $request->body;
      $card->notes()->save($note);*/

      $this->validate($request,[
        'body'=>'required|min:10'
      ]);

      $card->notes()->create($request->all());
      return back();
  }

  public function edit(Note $note){
       return view('notes.edit',['note'=>$note]);
  }

  public function update(Request $request , Note $note){
    $note->update($request->all());
    return back();
  }
}
