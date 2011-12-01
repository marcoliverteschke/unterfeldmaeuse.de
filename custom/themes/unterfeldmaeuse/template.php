<?php

	function unterfeldmaeuse_preprocess_html(&$variables)
	{
		$two_col_pages = array(
			'verein/vorstand',
			'kartenvorverkauf/vorverkaufstellen',
			'freunde-förderer'
		);
		
		$preAlias = $_SERVER['REQUEST_URI'];
		$alias = urldecode(substr(strchr($preAlias, "/"), 1));

		$columns = 'three-columns';
		if(in_array($alias, $two_col_pages))
		{
			$columns = 'two-columns';
		}
		$variables['classes_array'][] = $columns;
	}


	function unterfeldmaeuse_menu_tree($variables)
	{
		if(preg_match('/Impressum/', $variables['tree']))
		{
			$variables['tree'] = str_replace('first leaf', 'leaf', $variables['tree']);
			$variables['tree'] = '<ul class="menu"><li class="first leaf">&copy; ' . date('Y') . ' Unterfeldmäuse Erkrath</li>' . $variables['tree'] . '</ul>';
		}
		return $variables['tree'];
		
	}

?>