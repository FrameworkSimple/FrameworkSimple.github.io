<?php

	$file = "<?php \n\t/**\n\t * @ignore\n\t */";

	foreach($_POST as $setting => $value)
	{
		if(strpos($setting, "routes") !== false){

			foreach ($value as $index => $route) {
				if(!empty($route['name'])) $value[$route['name']] = array( $route['controller'] , $route['action']);
				unset($value[$index]);
			}

			$value = var_export( $value,true);
		}
		else if (is_array($value))
		{
			$value = var_export($value,true);
		}
		else if(strpos($value, "false") === false && strpos($value, "true") === false){
			$value = "'".$value."'";
		}

		$file .= "\n\t".str_replace("-", " ", $setting)." = ".trim(preg_replace('/\s+/', ' ',$value)).";";
	}
	file_put_contents("Settings_test.php", $file);

?>