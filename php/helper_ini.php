<?php

//Always include config.php
include_once "config.php";

//Read
function read_ini($file)
{
	return parse_ini_file($file, true);
}

//Write
//Data is a 3D array as follows: Section>>Token>>Value
function write_ini($file, $iniData)
{
	$iniString = '';
	
	foreach (array_keys($iniData) as $sectionName)
	{
		$iniString .= "\n[" . $sectionName . "]\n";
		foreach (array_keys($iniData[$sectionName]) as $key)
		{
			$iniString .= $key . '=';
			$iniString .= $iniData[$sectionName][$key] . "\n";
		}
	}	
	file_put_contents($file, $iniString, LOCK_EX);
}

//Set Key
//If Key Exits In Section Update Value, If Not Add Key With Given Value In Given Section
function set_key($iniData, $section, $key, $value)
{
	$iniData[$section][$key] = $value;
}

//Get Key
//Get Value Of Specified Key In Specified Section
function get_key($iniData, $section, $key)
{
	return $iniData[$section][$key];
}


?>