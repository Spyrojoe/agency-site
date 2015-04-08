<?php
function inSection($section)
{
	if(empty($section)) return false;
	if(is_array($section)){
		$inSection = false;
		foreach ($section as $s){
			if(inSection($s)) $inSection = true;
		}
		return $inSection;
	}
	if($section == $_SERVER['SCRIPT_NAME']) return true;
	if($section == 'home'){
		return $_SERVER['SCRIPT_NAME'] == '/index.php';
	} else {
		$dirs = explode('/',$_SERVER['SCRIPT_NAME']);
		if(is_array($section)){
			foreach($section as $s){
				if(in_array($s,$dirs)) return true;
			}
		} else {
			return in_array($section,$dirs);
		}
	}
	return false;
}

function inPage($page) 
{
	if($page == $_SERVER['SCRIPT_NAME']) {
		return true;
	} 

	return false;
}

?>