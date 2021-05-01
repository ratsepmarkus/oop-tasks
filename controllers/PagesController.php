<?php

class PagesController {
    public function home () {
        return view('index');
    }
    public function about () {
        return view('about', ['company' => 'R-kiosk']);
    }
    public function contact () {
        return view('contact');
    }
}