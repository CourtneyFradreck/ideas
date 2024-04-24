<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public function store(){
        
        request()->validate([
            'yourIdea' => 'required|min:5|max:1000|'
        ]);//idea char validation

        $idea = idea::create([
            'content' => request()->get('yourIdea', null),
        ]);//create yourIdea

        $idea->save();
        return redirect()->route('dashboard')->with('success', 'Idea created succesfully!!') ;//displays a succes message if the idea was created succesfully
    }
}
