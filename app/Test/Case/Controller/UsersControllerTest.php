<?php


App::uses('UsersController', 'Controller');

class UsersControllerTest extends ControllerTestCase  {
	protected $users;
  public $fixtures = array('app.page');
  public function setUp() {
        parent::setUp();
        $this->Page = ClassRegistry::init('Page');
  }
	// public function setUp() {
	//    //parent::setUp();
	//     $this->users = new UsersController;
	    
	// }

 //   public function testIndex() {
 //        $result = $this->testAction('/users/index');
 //        //$this->assertInternalType('array', $this->vars['posts']);
 //        debug($result);
 //    }

 //    public function testIndexShort() {
 //        $result = $this->testAction('/users/index/short');
 //        debug($result);
 //    }

 //    public function testIndexShortGetRenderedHtml() {
 //        $result = $this->testAction(
 //           '/users/index/short',
 //            array('return' => 'contents')
 //        );
 //        debug($result);
 //    }

 //    public function testIndexShortGetViewVars() {
 //        $result = $this->testAction(
 //            '/users/index/short',
 //            array('return' => 'vars')
 //        );
 //        debug($result);
 //    }

   //  public function testIndexPostData() {
   //      $data = array(
   //          'id' => '58',
			// 'firstname' => 'lwin moe asdf',
			// 'lastname' => 'aung',
			// 'email' => 'lwinmoeaung@gmail.com',
			// 'username' => 'lwin moe aung',
			// 'modified' => '2019-01-10 18:46:50'
   //      );
   //      $result = $this->testAction(
   //          '/users/index',
   //          array('data' => $data, 'method' => 'post')
   //      );
   //      debug($result);
   //  }

 //    public function testAdding() {
	//     $data = array(
	//         'User' => array(
	//             'firstname' => 'New post',
	//             'lastname' => 'Secret sauce',
	//             'email' => 'afsdasdf',
	//             'username' => 'asdfafs',
	//             'password' => ''
	//         )
	//     );
	//     $result = $this->testAction('/users/add', array('data' => $data, 'method' => 'post'));
	//     debug($result);
	//     // some assertions.
	// }

	public function testJsonResponse() {
        $result = $this->testAction('/users/jsonResponse');
        $result = json_decode($result, true);
        $expected = $this->Page->published();
       
       
        $this->assertEquals($expected, $result);
    }
}