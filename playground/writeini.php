<?php


$configData = array	( 	"main"=>array
							("name"=>"sam", "age"=>26),
						"path"=>array
							("home"=>"/home/sam", "xbmc"=>"/home/xbmc")
					);
					
$configData["main"]["age"]=100;

//Data is a 3D array as follows: Section>>Token>>Value
function write_ini($file, $data)
{
	$iniString = '';
	
	foreach (array_keys($data) as $sectionName)
	{
		$iniString .= "\n[" . $sectionName . "]\n";
		foreach (array_keys($data[$sectionName]) as $key)
		{
			$iniString .= $key . '=';
			$iniString .= $data[$sectionName][$key] . "\n";
		}
	}	
	file_put_contents($file, $iniString, LOCK_EX);
}

write_ini('test.ini', $configData);


?>