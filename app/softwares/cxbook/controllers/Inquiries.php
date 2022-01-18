<?php

  class Inquiries extends SoftwareController
  {

    public function __construct()
    {
        $this->model = $this->model('InquiryModel');
    }

    public function index()
    {
      $data = [
        'inquiries' => $this->model->dbgetDesc('id')
      ];

      return $this->view('inquiry/index' , $data);
    }

    public function create()
    {

    }
  }
