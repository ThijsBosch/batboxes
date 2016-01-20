<div class="home">
	<div class="row">
		<div class="col-md-3">
			<?php print render($region['left-menu']); ?>
		</div>
		<div class="col-md-6">
      <?php echo render($content); ?>
		</div>
		<div class="col-md-3">
			<h3>
				<a href="http://app.vleermuizen.beta.swigledev.nl/visits/form">
					<img src="<?php print base_path() . path_to_theme()?>/images/waarneming-toevoegen.jpg" alt="Waarneming toevoegen">
				</a>
			</h3>
			<?php print render($region['right-menu']); ?>
		</div>
	</div>
</div>
