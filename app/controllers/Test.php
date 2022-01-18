<?php

	class Test
	{

		public function index()
		{
			echo $_GET['test'] ?? 'hey no get parameter';
		}
	}