<header>
	<div class="container">
		<div id="navbar" class="navbar navbar-default">
			<div class="navbar-header">
				<?php if ($logo): ?>
					<a class="logo navbar-btn pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
					<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
					</a>
				<?php endif; ?>

				<div class="search hidden-xs">
					<form id="search">
						<input type="text" name="search" placeholder="Zoeken">
						<button type="submit"><i class="glyphicon glyphicon-search"></i></button>
					</form>
				</div>

				<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only"><?php print t('Toggle navigation'); ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				<?php endif; ?>
			</div>

			<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
				<div class="navbar-collapse collapse">
					<nav role="navigation">
						<?php if (!empty($primary_nav)): ?>
							<?php print render($primary_nav); ?>
						<?php endif; ?>
						<?php if (!empty($secondary_nav)): ?>
							<?php print render($secondary_nav); ?>
						<?php endif; ?>
						<?php if (!empty($page['navigation'])): ?>
							<?php print render($page['navigation']); ?>
						<?php endif; ?>
					</nav>
				</div>
			<?php endif; ?>
		</div>
		<div class="banner"></div>
	</div>
</header>
<main>
	<div class="container">
		<?php if (!empty($tabs)): ?>
			<br>
			<?php print render($tabs); ?>
		<?php endif; ?>
		<?php print render($page['content']); ?>
	</div>
</main>
<footer>
	<div class="container">
		<?php print render($page['footer']); ?>
	</div>
</footer>
