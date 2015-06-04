<?php

class Test_Speed_Bumps_Element_Factory extends WP_UnitTestCase {
	public function setUp() {
		parent::setUp();
	}

	public function test_create_existed_class() {
		$image_class = Speed_Bumps_Element_Factory::build( 'Image' );
		$is_image_class = is_a( $image_class, 'Speed_Bumps_Image_Constraint' );

		$this->assertTrue( $is_image_class );
	}

	/**
     	* @expectedException     Exception
	* @expectedExceptionMessage Invalid element type given
     	*/
	public function test_create_non_existed_class() {
		$wrong_class = Speed_Bumps_Element_Factory::build( 'Wrong' );


	}
}	