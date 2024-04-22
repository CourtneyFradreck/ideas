<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\idea;
use GuzzleHttp\Promise\Create;

class DashboardController extends Controller
{
    public function index(){
        $idea = new idea([
            'content' => 'courtney is a genius!!',
        ]);

        $idea->save();


        return view('welcome',[
            'ideas' => idea::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
