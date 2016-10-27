<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Card;
use App\Note;
use Illuminate\Support\Facades\Auth;

class notesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request, Card $card)
    {

        $this->validate($request, [
            'body' => 'required|min:10'
        ]);

        $note = new Note;
        $note->body = $request->body;
        $note->user_id = Auth::user()->id;
        $card->notes()->save($note);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', ['note' => $note]);
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());
        $cardId = Note::where('body', $request->body)->first();
        return redirect()->route('cards', [1]);
    }
}
