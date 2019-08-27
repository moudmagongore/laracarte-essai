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
