<?php
	include('../bin/helper_location.php');
	include('../tpl/overall_header.html');
	
	$locationData = getLocationData();
	$locations = getLocations($locationData);
	$locHTML = locationHTML($locations);
	
	
?>
		
	<div data-role="collapsible-set" data-theme="a" data-content-theme="c">
		<div data-role="collapsible" data-collapsed="true">
			<h3>General</h3>
			<ul data-role="listview">
				<li><a href="">Option 1</a></li>
				<li><a href="">Option 2</a></li>
				<li><a href="">Option 3</a></li>
			</ul>
		</div>
		
		<div data-role="collapsible" data-collapsed="true">
			<h3>Locations</h3>
			<ul data-role="listview">
			<?php echo locationHTML($locations); ?>
			</ul>
		</div>
	</div>
			
<?php
	include('../tpl/overall_footer.html');
?>
			
			