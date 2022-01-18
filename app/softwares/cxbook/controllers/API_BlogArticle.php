<?php 	

	class API_BlogArticle extends SoftwareController
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


		public function reorderItems()
	    {
	      $post = request()->inputs();

	      $items = $post['items'];

	      /*
	      *array key as orders
	      *values are id video ids
	      */
	      $result = $this->article->reorderItems($items);

	      ee(api_response($result));
	    }
	}