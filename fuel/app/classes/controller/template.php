<?php

namespace Fuel\App\Controller;

class Template extends BaseController {

        public $default_action = 'index';

	public function before()
	{
		$this->output .= View::factory('template/header');
	}
	public function after()
	{
		$this->output .= View::factory('template/footer');
	}
	
	public function action_index(){ }

}

?>
