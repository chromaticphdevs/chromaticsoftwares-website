<?php
class Projects extends Controller
{
  public function __construct()
  {
      $this->model = $this->model('ProjectModel');
  }

  public function index()
  {
    $data = [
      'title' => 'Projects',
      'meta'  => [
        'description' => 'Best software solution'
      ]
    ];

    $data['projects'] = $this->model->all();

    return view('projects/index' , $data);
  }

  public function show($key)
  {
    $project = $this->model->get($key);

    $data = [
      'title' => $key,
      'project' => $project
    ];

    return view('projects/show' , $data);
  }

	//--------------------------------------------------------------------

}
