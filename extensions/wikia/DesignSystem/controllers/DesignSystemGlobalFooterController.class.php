<?php

class DesignSystemGlobalFooterController extends WikiaController {

	public function index() {
		Wikia::addAssetsToOutput( 'design_system_scss' );

		$this->response->setTemplateEngine( WikiaResponse::TEMPLATE_ENGINE_MUSTACHE );
	}
}
