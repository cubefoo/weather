<div id="weather" class="section">
	<h2><?php p($l->t('Weather')) ?></h2>
	<p>
		<label for="openweathermap-api-key"><?php p($l->t('OpenWeatherMap API Key')) ?></label>
		<br />
		<input id="openweathermap-api-key" type="text" value="<?php p($_['openweathermap_api_key']) ?>" />
		<input type="submit" id="submitOWMKey" value="<?php p($l->t('Save')); ?>"/>
	</p>
</div>

