<?php

App::uses('AppModel', 'Model');


class User extends AppModel {

	public function published($fields = null) {
	    $params = array(
	        'fields' => $fields
	    );


	    return $this->find('all', $params);
	}

}