<?php 
	if(!function_exists('page_title'))
	{
		function page_title($title)
		{
			$baseTitle = 'Larcarte - Liste des artisans';

			if($title === '')
			{
				return $baseTitle;
			}
			else
			{
				return $title. ' | '. $baseTitle;
			}
		}
	}



	if(!function_exists('set_active_route'))
	{
		function set_active_route($route)
		{
			return Route::is($route) ? 'active' : '';
		}
	}

