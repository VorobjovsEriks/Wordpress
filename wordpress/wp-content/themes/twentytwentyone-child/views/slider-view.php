<div class="slider--container alignwide">
	<span class="anchor" id="slider"></span>
	<div class="slider--container__background"></div>
	<span class="slider--container__title"><?= $args['title'] ?></span>
	<div class="slider">
		<button class="slider__navigation" id="sliderPrev">
			<img src="/wp-content/themes/twentytwentyone-child/resources/images/arrow.png" alt="arrowLeft">
		</button>
		<div class="slider__cards" data-count="<?= count($args['data']) ?>">
			<?php
			foreach ($args['data'] as $key => $arg) {
				?>
				<div class="card" data-current="<?= $key + 1 ?>">
											<img class="card__img" src="<?= $arg['img'] ?>" alt="">
					<div class="card--info">
						<h4 class="card--info__title">
							Lorem ipsum dolor sit amet
						</h4>
						<p class="card--info__description">
															<?= $arg['desc'] ?>
						</p>
					</div>
					<a href="#" class="card--link">
						<img
							src="/wp-content/themes/twentytwentyone-child/resources/images/arrow-pointing-to-right.png">
					</a>
				</div>
				<?php
			}
			?>
		</div>
		<button class="slider__navigation" id="sliderNext">
			<img src="/wp-content/themes/twentytwentyone-child/resources/images/arrow.png" alt="arrowRight">
		</button>
	</div>
</div>
