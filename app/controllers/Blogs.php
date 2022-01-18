<?php

  class Blogs extends Controller
  {

    public function __construct()
    {
      $this->blog = appModel('BlogModel' , 'cxbook');
      $this->article = appModel('BlogArticleModel' , 'cxbook');
      $this->fbog = appModel('FacebookOGModel', 'cxbook');
      $this->seo = appModel('SeoModel', 'cxbook');

      $this->pathUpload  = PATH_UPLOAD.DS.'blogs';

      $this->uploadLink  = GET_PATH_UPLOAD.DS.'blogs';
    }


    public function index()
    {
      $data = [
        'blogs' => $this->blog->all(" is_visible = true" , 'id desc'),
        'pathLink' => $this->uploadLink
      ];

      return view('blog/all' , $data);
    }

    public function show($slug = null)
    {
      if(is_null($slug))
        return redirect("Blogs");

      $blog = $this->blog->getBySlug($slug);


      if(!$blog->is_visible)
      {
        Flash::set("Blog is not yet ready here's other articles that you might be interested in");
        return redirect('Blogs');
      }
      $articles = $this->article->getByBlog($blog->id);

      $fbog = $this->fbog->getByBlog($blog->id);

      $seo  = $this->seo->getByBlog($blog->id);;

      $data = [
        'blog' => $blog,
        'articles' => $articles,
        'fbog' => $fbog,
        'seo'  => $seo,
        'pathLink' => $this->uploadLink
      ];

      return view('blog/show' , $data);
    }
  }
