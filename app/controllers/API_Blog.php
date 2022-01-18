<?php

  class API_Blog extends Controller
  {

    public function uploadImage()
    {

      $uploadImage = upload_image('upload' , PATH_UPLOAD);

      $result = $uploadImage['result'];

      ee(api_response($result));
    }
  }
