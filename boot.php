<?php
	if (rex::isBackend()) {
		rex_view::addCssFile($this->getAssetsUrl('rex_address.css'));
		rex_view::addJsFile('http://maps.google.com/maps/api/js?language='.rex_i18n::getLocale());
		rex_view::addJsFile($this->getAssetsUrl('jquery.googleMapsForm.js'));
		rex_view::addJsFile($this->getAssetsUrl('rex_address.js'));
	}
?>