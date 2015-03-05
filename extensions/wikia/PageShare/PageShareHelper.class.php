<?php

class PageShareHelper {

	public function getIcon( $service ) {
		return '<svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 50 50" xml:space="preserve"><path d="M25 0.2C11.3 0.2 0.2 11.3 0.2 25 0.2 38.7 11.3 49.8 25 49.8 38.7 49.8 49.8 38.7 49.8 25 49.8 11.3 38.7 0.2 25 0.2ZM18.5 25c0 0.3 0 0.5-0.1 0.7l10.5 5.1c0.9-0.9 2.2-1.5 3.6-1.5 2.7 0 4.9 2.2 4.9 4.9 0 2.7-2.2 4.9-4.9 4.9-2.7 0-4.9-2.2-4.9-4.9 0-0.2 0-0.5 0.1-0.7L17.1 28.3c-0.9 0.9-2.1 1.5-3.5 1.5-2.7 0-4.9-2.2-4.9-4.9 0-2.7 2.2-4.9 4.9-4.9 1.4 0 2.7 0.6 3.6 1.5l10.4-5.1c0-0.2-0.1-0.5-0.1-0.7 0-2.7 2.2-4.9 4.9-4.9 2.7 0 4.9 2.2 4.9 4.9 0 2.7-2.2 4.9-4.9 4.9-1.4 0-2.7-0.6-3.6-1.5l-10.4 5.1c0 0.2 0.1 0.5 0.1 0.7z"/></svg>';
	}

	public function getUserLanguageCode( $request ) {
		static $language = null;

		if ( $language === null ) {
			global $wgLang;

			$language  = $request->getVal( 'lang' );

			if ( !$language ) {
				$language = $wgLang->getCode();
			}
		}
		return $language;
	}

	public function isValidShareService( $service, $lang ) {
		// filter through include list, default ot true
		if ( array_key_exists( 'languages:include', $service ) && is_array( $service['languages:include'] ) ) {
			$allowedInLanguage = in_array( $lang, $service['languages:include'] );
		} else {
			$allowedInLanguage = true;
		}
		// filter through exclude list
		if ( array_key_exists( 'languages:exclude', $service ) && is_array( $service['languages:exclude'] ) ) {
			$allowedInLanguage = $allowedInLanguage && !in_array( $lang, $service['languages:exclude'] );
		}

		return $allowedInLanguage && array_key_exists( 'url', $service ) && array_key_exists( 'name', $service );
	}
}
