<?php

	function unterfeldmaeuse_preprocess_html(&$variables)
	{
		$two_col_pages = array(
			'verein/vorstand',
			'kartenvorverkauf/vorverkaufstellen',
			'freunde-förderer',
			'user',
		);

		$columns = 'three-columns';
		if(in_array(drupal_get_path_alias(current_path()), $two_col_pages))
		{
			$columns = 'two-columns';
		}
		
		$variables['classes_array'][] = $columns;

		if(preg_match("/^unterfeldmaeuse\//", current_path())) {
			$variables['classes_array'][] = 'branch-unterfeldmaeuse';
		} else if ($node = menu_get_object()) {
			if(isset($node->field_bereich) && isset($node->field_bereich['und'][0]['tid']) && (int)$node->field_bereich['und'][0]['tid'] === 2) {
				$variables['classes_array'][] = 'branch-unterfeldmaeuse';
			}
		}
	}

	function unterfeldmaeuse_menu_tree($variables)
	{
		$return = $variables['tree'];
		if(preg_match('/Impressum/', $variables['tree']))
		{
			$return = str_replace('first leaf', 'leaf', $return);
			$return = '<li class="first leaf">&copy; ' . date('Y') . ' Kultur- und Theaterinitiative Neandertal e.V.</li>' . $return;
		}
		return '<ul class="menu">' . $return . '</ul>';
		
	}

?>