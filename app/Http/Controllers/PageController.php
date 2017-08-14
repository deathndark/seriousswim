<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Forrest;
use Session;

class PageController extends Controller
{
    public function index() {
    	Forrest::authenticate();
    	$f = Forrest::query('SELECT Id FROM Account');
    	dd($f);
    	return view('welcome');
    }
}
