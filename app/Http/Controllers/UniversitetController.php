<?php

namespace App\Http\Controllers;

use App\Models\Universitet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UniversitetController extends Controller
{
    public function index(){
        $universitets = Universitet::all();
        
        return view("project.univer", compact("universitets"));
    }
}
