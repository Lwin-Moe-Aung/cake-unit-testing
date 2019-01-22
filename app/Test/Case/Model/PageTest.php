<?php

App::uses('User', 'Model');
App::uses('Page', 'Model');

class PageTest extends CakeTestCase {
    public $fixtures = array('app.article');

    public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
        $this->Page = ClassRegistry::init('Page');
    }

    public function testPublished() {
       // $result = $this->User->published(array('id', 'title'));
        //var_dump($result);die();
        $result1 = $this->Page->published(array('id', 'title'));
        var_dump($result1);die();
        // $expected = array(
        //     array('User' => array('id' => 1, 'title' => 'First Article')),
        //     array('User' => array('id' => 2, 'title' => 'Second Article')),
        //     array('User' => array('id' => 3, 'title' => 'Third Article')),
        //     array('User' => array('id' => 4, 'title' => 'fourth Article'))
        // );
        $expected = array(
            array('User' => array('id' => 1, 'detail' => 'lwin moeadfa')),
            array('User' => array('id' => 2, 'detail' => 'aung aung'))
            
        );

        $this->assertEquals($expected, $result);
    }
   
}