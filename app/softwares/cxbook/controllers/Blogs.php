<?php

	class Blogs extends SoftwareController
	{

		public function __construct()
		{
			$this->loadModels([
				'blog' => 'BlogModel',
				'seo'  => 'SeoModel',
				'fbog' => 'FacebookOGModel',
				'article' => 'BlogArticleModel'
			]);

			$this->pathUpload  = PATH_UPLOAD.DS.'blogs';

			$this->uploadLink  = GET_PATH_UPLOAD.DS.'blogs';
		}

		public function index()
		{

			$data = [
				'blogs' => $this->blog->all(),
				'uploadLink' => $this->uploadLink
			];


			return $this->view('blog/index' , $data);
		}


		public function show($id)
		{
			$blog = $this->blog->get($id);

			$fbog = $this->fbog->getByBlog($blog->id);

			$seo  = $this->seo->getByBlog($blog->id);

			$articles = $this->article->getByBlog($blog->id , 'position');


			$data = [
				'blog' => $blog,
				'fbog' => $fbog,
				'seo'  => $seo,
				'articles' => $articles,
				'uploadLink' => $this->uploadLink
			];

			return $this->view('blog/show' , $data);
		}


		public function edit($id)
		{
			$blog = $this->blog->get($id);

			$fbog = $this->fbog->setBlog($blog->id);

			$seo  = $this->seo->setBlog($blog->id);

			$formName = 'formBlog';

			$data = [
				'blog' => $blog,

				'fbog' => $this->fbog->getByBlog($blog->id),

				'seo'  => $this->seo->getByBlog($blog->id),

				'form'  => [
					'name' => $formName,
					'inputText' => [
						'class' => 'form-control',
						'form'  => $formName
					],

					'inputFile' => [
						'class' => 'form-control',
						'form'  => $formName
					],

					'inputTextarea' => [
						'class' => 'form-control',
						'form'  => $formName,
						'rows'  => 2,
						'style' => 'resize:none'
					]
				]
			];

			return $this->view('blog/edit' , $data);
		}

		public function create()
		{
			$formName = 'formBlog';

			$data = [
				'blogs' => $this->blog->all(),

				'form'  => [
					'name' => $formName,
					'inputText' => [
						'class' => 'form-control',
						'form'  => $formName
					],

					'inputFile' => [
						'class' => 'form-control',
						'form'  => $formName
					],

					'inputTextarea' => [
						'class' => 'form-control',
						'form'  => $formName,
						'rows'  => 2,
						'style' => 'resize:none'
					]
				]
			];

			return $this->view('blog/create' , $data);
		}


		public function store()
		{
			$post = request()->posts();

			$wallPaper = upload_image('wallpaper' , $this->pathUpload);

			if($wallPaper['result'] == 'failed'){
				Flash::set("Wallpaper Upload failed!" , 'danger');
				return request()->return();
			}

			$blogData = [
				'title' => $post['title'],
				'sub_title' => $post['sub_title'],
				'wallpaper_alt' => $post['wallpaper_alt'],
				'wallpaper'  => $wallPaper['result']['name']
			];

			/*
			*INSERT BLOG
			*Second pameter is for slug
			*/

			$insertBlog = $this->blog->save($blogData , 'title');

			if(!$insertBlog){
				flash_err();
				return request()->return();
			}


			$blog = $this->blog->get($this->blog->id);

			$blog_id = $blog->id;

			/*INSERT SEO*/
			$seo = $post['seo'];
			$seo['blog_id'] = $blog_id;
			$insertSeo = $this->seo->store($seo);

			/*INSERT FACEBOOK GRAPH*/
			$fbog = $post['openGraph'];
			$fbog['blog_id'] = $blog_id;
			$fbog['url']     = URL.DS.'blogs/show/'.$blog->slug;

			$insertFbog = $this->fbog->store($fbog);


			if($insertBlog && $insertSeo && $insertFbog) {
				Flash::set("Blog Created");
				return appRedirect("Blogs");
			}else{
				Flash::set("Something went wrong"  , 'danger');
				return request()->return();
			}
		}

		public function update()
		{
			$post = request()->posts();

			$blog_id = $post['blog_id'];
			$seo_id = $post['seo_id'];
			$fbog_id = $post['fbog_id'];
			/*IF WALLPAPER IS MEANT TO BE CHANGED*/
			if(!empty($_FILES['wallpaper']['name']))
			{
				$wallPaper = upload_image('wallpaper' , $this->pathUpload);

				if($wallPaper['result'] == 'failed'){
					Flash::set("Wallpaper Upload failed!" , 'danger');
					return request()->return();
				}
			}


			$blogData = [
				'title' => $post['title'],
				'slug'  => $this->blog->makeSlug($post['title']),
				'sub_title' => $post['sub_title'],
				'wallpaper_alt' => $post['wallpaper_alt']
			];
			/*
			*INSERT BLOG
			*Second pameter is for slug
			*/

			$updateBlog = $this->blog->update($blogData , $blog_id);

			if(!$updateBlog){
				flash_err();
				return request()->return();
			}

			/**UPDATE WALLPAPER IF CHANGED**/

			if(isset($wallPaper)) {
				$this->blog->update([
					'wallpaper' => $wallPaper['result']['name']
				], $blog_id);
			}

			$blog = $this->blog->get($blog_id);

			/*INSERT SEO*/
			$seo = $post['seo'];

			$updateSEO = $this->seo->update($seo , $seo_id);

			/*INSERT FACEBOOK GRAPH*/
			$fbog = $post['openGraph'];
			$fbog['url']     = URL.DS.'blogs/show/'.$blog->slug;
			$updateFbog = $this->fbog->update($fbog , $fbog_id);


			if($updateBlog && $updateSEO && $updateFbog) {
				Flash::set("Blog Updated");
				return appRedirect("Blogs/edit/{$blog_id}");
			}else{
				Flash::set("Something went wrong"  , 'danger');
				return request()->return();
			}
		}
	}
