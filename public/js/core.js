const URL = 'https://chromaticsoftwares.com';

const DS  = '/';

const getURL = function(called_url = null){

	if(called_url != null) {

		return URL+DS+called_url;
	}

	else{
		return URL;
	}
	
};
