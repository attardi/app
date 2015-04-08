<?php
class PortableInfoboxRenderServiceTest extends PHPUnit_Framework_TestCase {
	private $infoboxRenderService;

	public function setUp() {
		$this->infoboxRenderService = new PortableInfoboxRenderService();
	}

	public function testRenderInfobox( $input, $output ) {
		$this->assertEquals( $this->infoboxRenderService( $input ), $output );
	}

	public function testRenderInfoboxDataProvider() {
		return [
			[
				'input' => [
					[
						'type' => 'title',
						'data' => [
							'value' => 'Test Title'
						]
					],
					[
						'type' => 'image',
						'data' => [
							'alt' => 'image alt',
							'value' => 'http://image.jpg'
						]
					],
					[
						'type' => 'keyVal',
						'data' => [
							'label' => 'test label',
							'value' => 'test value'
						]
					]
				],
				'output' => '<aside class="portable-infobox"><div class="infobox-item item-type-title"><h2 class=”infobox-title”>Test Title</h2></div><div class="infobox-item item-type-image"><figure><img alt="image alt" data-url="http://image.jpg" /></figure></div><div class="infobox-item item-type-key-val"><h3 class=”infobox-item-label”>test label</h3><div class=”infobox-item-value”>test value</div></div></aside>'
			]
		];
	}
}
