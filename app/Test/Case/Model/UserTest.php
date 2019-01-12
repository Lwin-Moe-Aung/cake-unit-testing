<?php

App::uses('User', 'Model');

class UserTest extends CakeTestCase {
    public $fixtures = array('app.article');

    public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    }

    public function testPublished() {
        $result = $this->User->published(array('id', 'firstname'));
        $expected = array(
            array('User' => array('id' => 58, 'firstname' => 'lwin moe asdf')),
            array('User' => array('id' => 60, 'firstname' => 'asdfasddsdd')),

        );

        $this->assertEquals($expected, $result);
    }
   
}