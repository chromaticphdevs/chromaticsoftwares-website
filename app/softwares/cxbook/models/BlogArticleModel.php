<?php 	

	class BlogArticleModel extends Model 
	{

		public $table = 'blog_articles';



		public function getByBlog($blog_id , $orderby = 'position'){

			return parent::dbgetAssoc($orderby , "blog_id = '{$blog_id}'");
		}
		
		public function getByBlogAssoc($blog_id)
		{
			return $this->dbHelper->resultSet(...[
				$this->table,
				'*',
				" blog_id = '{$blog_id}'",
				' id asc '
			]);
		}

		public function reorderItems($items)
		{
			$updateOK = true;

			foreach($items as $key => $row)
			{
				$itemposupdate = parent::update([
					'position' => $key
				] , $row);
				/*An error occured*/
				if(!$itemposupdate)
					$updateOK = false;
			}

			return $updateOK;
		}
		
	}