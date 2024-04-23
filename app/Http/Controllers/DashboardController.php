<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\idea;
use GuzzleHttp\Promise\Create;

class DashboardController extends Controller
{
    public function index(){

        return view('welcome',[
            'ideas' => idea::orderBy('created_at', 'DESC')->get()
        ]);
    }
}
