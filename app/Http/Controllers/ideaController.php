<?php

namespace App\Http\Controllers;

use App\Models\idea;
use Illuminate\Http\Request;

class ideaController extends Controller
{
    public function store(){
        dump();

        $idea = new idea([
            'content' => request()->get('yourIdea', null),
        ]);

        $idea->save();
    }
}
