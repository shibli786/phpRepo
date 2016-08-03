<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Card;

class AddNotesController extends Controller
{
    

public function addNotes(Request $req,Card $card)
{
	$note= new Note;
	$note->card_id=$card->id;
	$note->body=$req->body;
	$note->save();
	return ;
}

}
