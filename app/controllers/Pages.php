<?php
class Pages extends Controller
{
  public function __construct()
  {
      $this->model = new ProjectModel();

      $this->industry = new IndustryModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Landing',
      'meta'  => [
        'description' => 'Best software solution',
      ],
      'industries'  => $this->industry->all()
    ];

    return view('pages/landing' , $data);
  }

  public function all()
  {
    $data = [
      'title' => 'Landing',
      'meta'  => [
        'description' => 'Best software solution'
      ]
    ];
    return view('pages/index' , $data);
  }


	//--------------------------------------------------------------------

}
