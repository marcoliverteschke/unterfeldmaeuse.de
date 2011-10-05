<?php

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