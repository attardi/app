<?php

class CommunityPageSpecialTopAdminsFormatterTest extends WikiaBaseTest {

	public function setUp() {
		$this->setupFile = __DIR__ . '/../CommunityPage.setup.php';
		parent::setUp();
	}

	/**
	 * @dataProvider adminsDataFormatProvider
	 */
	public function testAdminsDataFormat( $param, $result, $message ) {
		$this->assertEquals( CommunityPageSpecialTopAdminsFormatter::prepareData( $param ), $result, $message );
	}

	public function adminsDataFormatProvider() {
		return [
			[
				[ 'admin1', 'admin2', 'admin3', 'admin4' ],
				[
					'topAdminsList' => [ 'admin1', 'admin2' ],
					'otherAdminsCount' => 2,
					'haveOtherAdmins' => true,
					'allAdminsCount' => 4,
				],
				'For four users provided should return first two and info on remaining number'
			],
			[
				[ 'admin1', 'admin2', 'admin3' ],
				[
					'topAdminsList' => [ 'admin1', 'admin2', 'admin3' ],
					'otherAdminsCount' => 0,
					'haveOtherAdmins' => false,
					'allAdminsCount' => 3,
				],
				'For three users provided should return all three'
			],
			[
				[ 'admin1', 'admin2' ],
				[
					'topAdminsList' => [ 'admin1', 'admin2' ],
					'otherAdminsCount' => 0,
					'haveOtherAdmins' => false,
					'allAdminsCount' => 2,
				],
				'For two users provided should return all two'
			],
			[
				[ 'admin1' ],
				[
					'topAdminsList' => [ 'admin1' ],
					'otherAdminsCount' => 0,
					'haveOtherAdmins' => false,
					'allAdminsCount' => 1,
				],
				'For one user provided should return the one'
			],
			[
				[],
				[
					'topAdminsList' => [],
					'otherAdminsCount' => 0,
					'haveOtherAdmins' => false,
					'allAdminsCount' => 0,
				],
				'For none users provided should return empty list and zero count'
			],
		];
	}

}
