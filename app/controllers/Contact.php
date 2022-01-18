<?php

  class Contact extends Controller
  {
    public function index()
    {
      $data = [
        'headers' => [
          'title' => 'Contact',
          'description' => 'Software Ninja',
          'keywords'    => '123123',
          'author'      => 'Chromatic'
        ],
        
        'title' => 'Contact',
      ];


      return view('pages/contact' , $data);
    }
  }
