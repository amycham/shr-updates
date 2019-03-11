

<?php
	$here = "44irv";
	$floor = "lower";
	$title = "44 Irvington Road - Lower Level";
	$rooms = array(
		"basement" => array(
			"title" => "Basement",
			"featured" => 1,
			"count" => 2,
			"body" => "<li>25x25</li>
				  <li>Large</li>
				  <li>Dry</li>
				  <li>Well illuminated</li>
				  <li>Carpeted stairs to basement</li>
				  <li>Directly of the buttlers pantry</li>
				  <li>Close to the kitchen</li>
				  "
		),"laundry" => array(
			"title" => "Laundry Room",
			"featured" => 1,
			"count" => 2,
			"body" => "<li>25x25</li>
				  <li>Washer</li>
				  <li>Dryer</li>
				  <li>Working/folding       table</li>
				  <li>Lots of storage space</li>
				  <li>Ceiling is fully insulated</li>
				  <li>Outlet       and area for ironing</li>
				  "
		),
	
		"storage" => array(
			"title" => "Storage",
			"featured" => 1,
			"count" => 1,
			"body" => "<li>Nice large basement for storage</li>
  "
		),
		"water" => array(
			"title" => "Dual water heaters",
			"featured" => 1,
			"count" => 1,
			"body" => "<li>Dual large capacity water heaters</li>
			 <li>Even if every one is taking a long shower at the same time your will not run out of hot water</li>
  "
		),
		"utility" => array(
			"title" => "Utility sink",
			"featured" => 1,
			"count" => 2,
			"body" => "<li>Large counter with utility sink in basement</li>
			 <li>Nice for small or large projects</li>
  "
		),
		
		
	);		
	
			
			
			
				
			include("floor.php");			
			include("main.php");
?>
