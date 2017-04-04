<?php

class DnsSrvDiscovererTest extends PHPUnit_Framework_TestCase {
	/**
	 * @covers DnsSrvDiscoverer
	 * @dataProvider provideRecords
	 */
	public function testPickServer( $params, $expected ) {
		$discoverer = new DnsSrvDiscoverer( '_etcd._tcp.eqiad.wmnet' );
		$record = $discoverer->pickServer( $params );

		$this->assertEquals( $expected, $record );

	}

	public static function provideRecords() {
		return [
			[
				[ // record list
					[
						'target' => 'conf1003.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 0,
						'weight' => 1,
					],
					[
						'target' => 'conf1002.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 1,
						'weight' => 1,
					],
					[
						'target' => 'conf1001.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 2,
						'weight' => 1,
					],
				], // selected record
				[
					'target' => 'conf1003.eqiad.wmnet',
					'port' => 'SRV',
					'pri' => 0,
					'weight' => 1,
				]
			],
			[
				[ // record list
					[
						'target' => 'conf1003or2.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 0,
						'weight' => 1,
					],
					[
						'target' => 'conf1003or2.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 0,
						'weight' => 1,
					],
					[
						'target' => 'conf1001.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 2,
						'weight' => 1,
					],
					[
						'target' => 'conf1004.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 2,
						'weight' => 1,
					],
					[
						'target' => 'conf1005.eqiad.wmnet',
						'port' => 'SRV',
						'pri' => 3,
						'weight' => 1,
					],
				], // selected record
				[
					'target' => 'conf1003or2.eqiad.wmnet',
					'port' => 'SRV',
					'pri' => 0,
					'weight' => 1,
				]
			],
		];
	}
}
