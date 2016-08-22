<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Card;
use App\Note;



class CardsController extends Controller
{
    public function index(){

    $cards=Card::all();

   // $cards=['a','b','c'];
    	return view('cards.index',compact('cards'));
    }




    public function show($id){
        //echo $id;

    	$cards=Card::findOrFail($id);
       // echo $cards->title;
        $card_id=$id;
        $notes=Note::all()->where('card_id',$card_id);
      //  print_r($notes);
	//$notes = DB::table('users')->where('card_id', $id);
    	//$notes=Note::findOrFail($id);
        $arr=['notes'=>$notes,'cards'=>$cards];
    	
            return view('cards.cardsdetail',compact('arr'));
    }




public function laravel()
  {
      return view('welcome');

    }

public function show()
{
  return view('')
}
  


}
