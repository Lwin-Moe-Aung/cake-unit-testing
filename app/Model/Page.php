<?php
App::uses('AppModel', 'Model');
/**
 * pages Model
 *
 */
class Page extends AppModel {


	public function published() {
        

        $data = $this->find('first');
        $data["User"] = $data["Page"];
		unset($data["Page"]);

        return $data;
    }
}
