<?php

class Helper_Form 
{
	static $config = array();
	
	public function __construct($config=null)
	{
		if($config){ self::$config = $config; }
	}

	public static function build()
	{
		var_dump(self::$config);

		foreach(self::$config as $field){
			$type = $field['type'];
			echo call_user_func_array('Form::'.strtolower($type),$field['args']);
		}
	}

}

?>
