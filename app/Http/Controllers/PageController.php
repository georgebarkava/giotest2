<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
    	return view('pages.home');
    }

    public function getContact() {
    	return view('pages.contact');
    }

    public function getAbout() {
    	return view('pages.about');
    }
}
