<div id="container">
	<header role="banner">
		<?php if(isset($site_name) && strlen($site_name) > 0) : ?>
			<h1><a href="/"><?php print $site_name; ?></a></h1>
		<?php endif; ?>
		<?php if(isset($site_slogan) && strlen($site_slogan) > 0) : ?>
			<h2><?php print $site_slogan; ?></h2>
		<?php endif; ?>
		<nav id="tabs">
			<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t(''))); ?>
			<div class="clear"></div>
		</nav>
	</header>

	<section id="main" role="main">
		<?php
			$two_column = $is_front || (isset($node) && $node->type == 'newsmeldung');
		?>
		<?php if(!$two_column): ?>
			<div class="grid-1 grid-first" id="left-column">
				<?php print render($page['sidebar_first']); ?>
			</div>
		<?php endif; ?>
		<div class="<?php echo ($two_column ? 'grid-3' : 'grid-2') ?>" id="center-column">
				<div class="grid-content">
					<?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
					<?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
				<?php print render($page['content']); ?>
			</div>
		</div>
		<div class="grid-1 grid-last" id="right-column">
			<div class="grid-content">
				<?php print render($page['sidebar_second']); ?>
			</div>
		</div>
		<div class="clear"></div>
	</section>

	<footer>
		<nav id="footer">
			<?php print render($page['footer']); ?>
			<div class="clear"></div>
		</nav>
	</footer>
</div>
