<?php

  class BlogModel extends Model
  {

    public function __construct()
    {
      parent::__construct();

      $this->blogs = [
        'custom-software-application-for-business' => []
      ];
    }


    private function blogOne()
    {
    }
  }
