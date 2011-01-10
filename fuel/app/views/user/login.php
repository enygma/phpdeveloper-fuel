login

<?php echo $login_error; ?>

<?php 
echo Form::open('/user/login'); 

echo Form::input('username').'<br/>';
echo Form::password('password');

echo Form::submit('login','login');

echo Form::close();

$loginForm::build();

?>
