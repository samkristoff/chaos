<?php

include('helper_ini.php');

function getLocationData()	
{
	return read_ini('../conf/locations.ini');
}
	
	
function getLocations($locationData)
{
	$retVal = array();
	foreach(array_keys($locationData['locations']) as $key)
	{		
		if(preg_match("/name[0-9]*/", $key))
		{			
			array_push($retVal, $locationData['locations'][$key]);
		}	
	}
	return $retVal;
}

//Generate Location HTML
function locationHTML($locations)
{
	$retVal = '';
	foreach($locations as $locationName)
	{
		$retVal .= '<li><a href="">' . $locationName .'</a></li>';
	}
	return $retVal;
}
	
?>