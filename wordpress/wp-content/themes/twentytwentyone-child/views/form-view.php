<div class="get-more-info-form--container alignwide">
	<span class="anchor" id="form"></span>
	<div class="get-more-info-form__contacts">
		<div class="contacts">
			<div class="contact">
				<img src="/wp-content/themes/twentytwentyone-child/resources/images/contact_1.png">
				<div class="contact__description">
					<span class="contact__name">Agnė Valentinaitė</span>
					<span class="contact__email">agne@ntprojects.com</span>
					<span class="contact__phone">+370 62553454</span>
				</div>
			</div>
			<div class="contact">
				<img src="/wp-content/themes/twentytwentyone-child/resources/images/contact_2.png">
				<div class="contact__description">
					<span class="contact__name">Kamilė Henderson</span>
					<span class="contact__email">kamile@ntprojects.com</span>
					<span class="contact__phone">+370 64567893</span>
				</div>
			</div>
			<div class="contact">
				<img src="/wp-content/themes/twentytwentyone-child/resources/images/contact_3.png">
				<div class="contact__description">
					<span class="contact__name">Tomas Petkevičius</span>
					<span class="contact__email">tomas@ntprojects.com</span>
					<span class="contact__phone">+370 60567843</span>
				</div>
			</div>
		</div>
	</div>
	<div class="get-more-info-form__form">
		<form id="getMoreForm">
			<h2 class="get-more-info-form__form--title">
				Sužinok apie projektą daugiau
			</h2>

			<label class="error-container">
				<input type="text" name="formName" id="formName" class="get-more-info-form__form--input"
					   placeholder="Jūsų vardas">
				<span class="is-mandatory">Privalomas laukas</span>
			</label>
			<label class="error-container">
				<input type="text" name="formEmail" id="formEmail" class="get-more-info-form__form--input"
					   placeholder="El. Paštas">
				<span class="is-mandatory">Privalomas laukas</span>
				<span class="incorrect">Įvestas neteisingas el. paštas</span>
			</label>
			<label class="error-container">
				<input type="number" maxlength="12" name="formPhone" id="formPhone"
					   class="get-more-info-form__form--input" placeholder="Telefono numeris">
				<span class="is-mandatory">Privalomas laukas</span>
			</label>
			<label class="error-container">
				<input type="text" name="formMessage" id="formMessage" class="get-more-info-form__form--input"
					   placeholder="Žinutė">
				<span class="is-mandatory">Privalomas laukas</span>
			</label>
			<label id="formCheckbox">
				<input type="checkbox" name="formTerms" id="formTerms" class="get-more-info-form__form--input">
				<span class="error-container terms">
				Lorem ipsum, dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore minim
				<a class="form_term-mail" href="mailto:#">ntprojects@info.com</a>
				<span class="is-mandatory">Privalomas laukas</span>
			</span>
			</label>

			<button id="sendForm" class="disabled">
				Siųsti
				<img class="send-form--button__arrow"
					src="/wp-content/themes/twentytwentyone-child/resources/images/arrow-pointing-to-right-white.png">
			</button>
		</form>
	</div>
</div>
