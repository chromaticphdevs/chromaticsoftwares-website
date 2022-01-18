<?php 	
	class BlogModel extends Model
	{

		public $table = 'blogs';


		public function save($values , $slug)
		{
			$slug = $this->makeSlug($values[$slug]);
			/*ADD SLUG SLUG*/
			$values['slug'] = $slug;

			$data = [
				$this->table , 
				$values
			];

			return $this->id = parent::store($values);
		}

		public function getAll()
		{
			return $this->dbHelper->resultSet(...[
				$this->table,
				'*'
			]);

		}


		public function getBySlug($slug)
		{
			return $this->dbHelper->single(...[
				$this->table,
				'*',
				" slug = '{$slug}'"
			]);
		}

		public function makeSlug($text)
		{
			return strtolower(token_make_slug($text));
		}
	}