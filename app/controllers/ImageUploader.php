<?php

  class ImageUploader extends Controller
  {

    public function __construct()
    {
      $this->pathUpload = PATH_UPLOAD.DS.'downloaded_images';
      $this->pathLink   = GET_PATH_UPLOAD.DS.'downloaded_images';
    }

    public function index()
    {
      $data = [
        'images'    => scandir($this->pathUpload , 1),
        'imagePath' => $this->pathLink
      ];

      return $this->view('imageuploader/index' , $data);
    }

    public function create()
    {
      $data = [
        'form' => [
          'id' => 'uploadForm',
          'name' => 'uploadForm',
          'method' => 'post',
          'action' => '/ImageUploader/store',
          'enctype' => 'multipart/form-data'
        ]
      ];
      return $this->view('imageuploader/create' , $data);
    }

    public function store()
    {
      $imageName = request()->post('imageName');

      $uploadImage = upload_image('image' , $this->pathUpload , $imageName);

      if($uploadImage['status'] == 'failed')
      {
        Flash::set("Upload Failed" , 'danger');
        return request()->return();
      }
      $result = $uploadImage['result'];

      Flash::set("Image {$result['name']} has been saved");

      return redirect("ImageUploader");
    }
  }
