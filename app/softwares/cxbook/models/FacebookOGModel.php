<?php 	

	class FacebookOGModel extends Model
	{
		public $table = 'blogs_facebook_og';

		public function save($blog_id , $values)
		{
			// foreach($values as $key => $row)

			$sql = "INSERT INTO $this->table(blog_id , type , value)
					VALUES";
			$i = 0;
			$counter = 0;

			foreach($values as $key => $row) 
			{
				$field = $key;
				$value = str_escape($row);

				if($counter < $i) {
					$sql .= ",";
					$counter++;
				}

				$sql .= "('$blog_id','$field' , '$row')";

				$i++;
			}

			$this->db->query($sql);

			return $this->db->execute();
		}

		public function setBlog($blog_id)
		{
			$this->blog_id = $blog_id;

			return $this;
		}

		public function getByBlog($blog_id)
		{
			return $this->dbHelper->single(...[
				$this->table,
				'*',
				" blog_id = '{$blog_id}'"
			]);
		}

		public function getRowByType($type)
		{
			$blog_id = $this->blog_id;

			return $this->dbHelper->single(...[
				$this->table,
				'*',
				" blog_id = '{$blog_id}' and type = '{$type}'"
			]);
		}
	}