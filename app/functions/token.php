<?php

    function random_number($length = 12)
    {
      $result = '';

        for($i = 0; $i < $length; $i++) {
            $result .= mt_rand(1, 9);
        }

        return $result;
    }

    function get_token_random_char($length = 12 , $params = false)
    {
        $bytes = random_bytes($length);

    		if($params)
    			return strtoupper(substr(bin2hex($bytes), 0 , $length));
    		return substr(bin2hex($bytes), 0 , $length);
    }

    function seal($data)
	{
		return base64_encode(serialize($data));
	}

	function unseal($data)
	{
		try{
			return unserialize(base64_decode($data));
		}catch(Exception $e) {
			Flash::set("Unsealing information failed" , 'danger');
			return false;
		}

	}

	function token_make()
	{

		if(!Session::check('token')) {
			$token = seal(get_token_random_char(12));
			Session::set('token' , $token);
		}
		return Session::get('token');
	}

	function token_get()
	{
		return Session::get('token');
	}

	function token_get_d()
	{
		$token = token_get();
		Session::remove('token');

		return $token;
	}

	function token_get_c($token)
	{
		$savedToken = token_get_d();
		if($token != $savedToken)
			return false;
		return true;
	}

	function token_make_slug($string)
	{
		$clean = filter_var($string , FILTER_SANITIZE_STRING);

		$slug  = str_replace(' ', '_', $clean);

		return $slug;
	}
