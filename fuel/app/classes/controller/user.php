<?php

class Controller_User extends Controller_Template 
{

	public function action_index()
	{
		$this->template->content = 'some form';
	}
	public function action_login()
	{
		$auth = Auth::instance('phpdevauth');
		$data = array();

		// Build up our form
		$form = new Helper_Form(array(
			array(
				'type'	=> 'open',
				'args'	=> array('/user/login')
			),
			array(
				'type'	=> 'input',
				'args'	=> array('username')
			),
			array(
				'label'	=> 'Password',
				'type'	=> 'password',
				'args'	=> array('password')
			)
		));
		$data['loginForm'] = $form;


		$_POST['username'] = 'enygma';
		$_POST['password'] = 'dilbert1';

		if($auth->login($_POST['username'],$_POST['password']))
		{
			//Output::redirect('successpage');
			$data['login_error'] = 'you pass!';
		}else{
			$data['login_error'] = 'you fail';
		}
		$this->template->content = View::factory('user/login',$data);
	}
	public function action_logout()
	{
		Auth::instance('phpdevauth')->logout();
	}
}

?>
