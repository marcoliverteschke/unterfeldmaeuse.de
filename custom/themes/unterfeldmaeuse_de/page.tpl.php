	<div id="open_container"></div>
	<div id="container">
		<header role="banner">
			<h1><a href="/"><?php print $site_name; ?></a></h1>
			<h2><?php print $site_slogan; ?></h2>
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
					<div id="comingsoon">
						<h4>Nächste Premiere</h4>
						<p>Eine Woche voller Samstage</p>
						<p>26./27. März 2011</p>
					</div>
					<div id="mitmachen">
						<h4><a href="#">Mitmachen?</a></h4>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</section>

		<footer>
			<nav id="footer">
				<?php print render($page['footer']); ?>
				<!--<ul>
					<li>&copy; 2011 Unterfeldmäuse Erkrath</li>
					<li><span class="separator">|</li>
					<li><a href="#">unterfeldmaeuse.de</a></li>
					<li><span class="separator">|</li>
					<li><a href="#">Freunde & Förderer</a></li>
					<li><span class="separator">|</li>
					<li><a href="#">AGB</a></li>
					<li><span class="separator">|</li>
					<li><a href="#">Impressum</a></li>
				</ul>-->
				<div class="clear"></div>
			</nav>
		</footer>
	</div>
	<div id="close_container"></div>
