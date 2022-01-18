<?php 	

	class BlogArticle extends SoftwareController
	{

		public function __construct()
		{
			$this->loadModels([
				'blog' => 'blogModel',
				'article' => 'BlogArticleModel'
			]);

			$this->pathUpload  = PATH_UPLOAD.DS.'blogs';

			$this->uploadLink  = GET_PATH_UPLOAD.DS.'blogs';
		}
		public function create()
		{
			if(!isset($_GET['blog_id']))
				return;


			$blog_id = $_GET['blog_id'];

			$blog = $this->blog->get($blog_id);

			$formName = 'formArticle';

			$data = [
				// 'articles' => $this->article->getByBlogAssoc($blog_id),
				'blog'     => $blog,

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

			return $this->view('blog_article/create' , $data);
		}

		public function store()
		{
			$post = request()->posts();

			$blog_id = $post['blog_id'];

			/*check if wallpaper is set*/
			if(!empty($_FILES['wallpaper']['name'])){
				$wallpaper = upload_image('wallpaper' , $this->pathUpload);	
			}

			/*Instanciate Wallpaper Name*/
			$wallpaperName  = '';

			if(isset($wallpaper)) 
			{
				if($wallpaper['status'] == 'failed')
				{
					Flash::set("Wallpaper error");
					return request()->return();
				}
				/*set wallpaper name*/
				$wallpaperName = $wallpaper['result']['name'];
			}

			$articleData = [
				'blog_id'       => $blog_id,
				'title'         => $post['title'],
				'sub_title'     => $post['sub_title'],
				'body'          => $post['body'],
				'wallpaper'     => $wallpaperName,
				'wallpaper_alt' => $post['wallpaper_alt']
			];


			$result = $this->article->store($articleData);


			Flash::set("Blog {$post['title']} Saved");

			return appRedirect("Blogs/show/{$blog_id}");
		}


		public function edit($id)
		{
			$article = $this->article->get($id);
			$blog = $this->blog->get($article->blog_id);

			$formName = 'formArticle';

			$data = [
				'article' => $article,
				'blog'    => $blog,

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
				],
				'pathLink' => $this->uploadLink
			];

			return $this->view('blog_article/edit' , $data);
		}

		public function delete($id)
		{
			$this->article->delete($id);

			$blog_id = request()->post('blog_id');

			return appRedirect("blogs/show/{$blog_id}");
		}


		public function update()
		{
			$post = request()->posts();

			$blog_id = $post['blog_id'];

			/*check if wallpaper is set*/
			if(!empty($_FILES['wallpaper']['name'])){
				$wallpaper = upload_image('wallpaper' , $this->pathUpload);	
			}

			$articleData = [
				'title'         => $post['title'],
				'sub_title'     => $post['sub_title'],
				'body'          => $post['body'],
				'wallpaper_alt' => $post['wallpaper_alt']
			];


			$result = $this->article->update($articleData , $post['article_id']);

			/*IF UPDATE WALLPAPER*/
			if(isset($wallpaper)) 
			{
				if($wallpaper['status'] == 'failed')
				{
					Flash::set("Wallpaper error");
					return request()->return();
				}

				$wallpaperName = $wallpaper['result']['name'];

				$this->article->update([
					'wallpaper' => $wallpaperName
				] , $post['article_id']);

			}

			Flash::set("Blog {$post['title']} Saved");

			return appRedirect("BlogArticle/edit/{$post['article_id']}");
		}

		public function removeWallpaper($article_id)
		{
			$result = $this->article->update(['wallpaper' => ''] , $article_id);

			Flash::set("Wallpaper Removed");

			return appRedirect("BlogArticle/edit/{$article_id}");
		}
	}