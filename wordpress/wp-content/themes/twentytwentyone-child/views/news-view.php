<div class="news--container alignwide" >
	<span class="anchor" id="news"></span>
	<div class="news--container__title"><?= $args['title'] ?></div>
	<div class="news">
		<div class="news__cards" data-count="<?= count($args['data']) ?>">
			<?php
			foreach ($args['data'] as $key => $arg) {
				?>
				<a class="card" data-current="<?= $key + 1 ?>">
											<img class="card__img" src="<?= $arg['img'] ?>" alt="">
					<span class="card__text">
						<?= $arg['desc'] ?>
					</span>
				</a>
				<?php
			}
			?>
		</div>
		<button class="news--button__all-news">
			Daugiau naujienų
			<img
				src="/wp-content/themes/twentytwentyone-child/resources/images/arrow-pointing-to-right-white.png">
		</button>
	</div>
</div>
