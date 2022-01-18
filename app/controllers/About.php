<?php

  class About extends Controller
  {
    public function index()
    {
      $data = [
        'title' => 'About'
      ];
      return view('pages/about' , $data);
    }
  }
