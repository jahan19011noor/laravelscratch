<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cards;

use App\Http\Requests;

class cardsController extends Controller
{
    public function index()
    {
        //$cards = DB::table('cards')->get();
        $cards = Cards::all();
        return view('cards.index', compact('cards'));
    }
    
    // public function show($id)
    // {
    //     $card = Cards::find($id);
        
    //     return view('cards.card', compact('card'));
    // }
    
    public function rmb(Cards $card)
    {
        return $card;
    }
    
    public function show(Cards $title)
    {
        return view('cards.title', compact('title'));
    }
}