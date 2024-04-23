<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public function store(){
        dump();

        $idea = idea::create([
            'content' => request()->get('yourIdea', null),
        ]);

        $idea->save();
        return redirect()->route('dashboard');
    }
}
