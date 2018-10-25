<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
    	return view('home', [
    		'key1' => 'value1',
    		'tasks' => [
	 			'go to the store',
				'go to the market',
				'go to work'
 			]
    	]);
    }

    public function about() {
    	return view('about');
    }

    public function contact() {
    	return view('contact');
    }
}
