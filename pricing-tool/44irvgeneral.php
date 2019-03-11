

<?php
	$here = "44irv";
	$floor = "general";
	$title = "44 Irvington Road - General Features";
	$rooms = array(
		"energy" => array(
			"title" => "Green Living - Energy Efficiency",
			"featured" => 1,
			"count" => 3,
			"body" => "<li>Natural       gas high efficience (80%) furnace</li>
					  <li>Central air conditioning - high efficiency</li>
					  <li>New       double panel thermo windows in the entire house</li>
					  <li>Well       insulated attic/roof</li>
					  <li>Fully       insulated ceiling in basement</li>
					  <li>Insulated side door</li>
					  <li>Natural gas range</li>
					   <li>Natural gas dryer for optimal efficiency</li> <li>Average monthly gas and electricity is low</li>"
		),
		"garage" => array(
			"title" => "Garage and Driveway",
			"featured" => 1,
			"count" => 1,
			"body" => "<li>Long       drive way directly off Irvington Road - parking for 4 cars</li>					  
			<li>1.5 car garage awailable to rent by one of the tenants for $25.00/month</li>
					  <li>Generous parking in the back yard allow parking 4 cars and get in and out without moving other cars</li>"
		),
		"Cable" => array(
			"title" => "All rooms directly wired for cable",
			"featured" => 0,
			"count" => 0,
			"body" => "<li>All rooms are directly wired for cable for optimal speed and privacy. You are still on one account for all students to keep the 
			cost down</li>					  
					  <li>Nice feature if you like to have TV in your room</li>"
		),
		"parking" => array(
			"title" => "Parking",
			"featured" => 1,
			"count" => 1,
			"body" => "<li>Off street parking in garage and driveway</li>
			<li>Large garage with room for bicycles</li>
			<li>Easy in and out</li>"
		),
		"yard" => array(
			"title" => "Yard",
			"featured" => 1,
			"count" => 3,
			"body" => "<li>Nice large back yards</li>"
		),
		"location" => array(
			"title" => "Location and Safety",
			"featured" => 1,
			"count" => 0,
			"body" => "<li>Located       on Irvington Road,       which is three blocks from Medical Center and 
			Strong Memorial Hospital 4 minutes walk to the Strong Memorial Hospital</li>
  <li>Very       safe and family-oriented street</li>
  <li>Four minutes walk to nursing school</li>
   <li>Fire, smoke and carbone monoxid detectors on each floor and in each bedroom. Hard wired, interconnected       and with battery backup</li>
 "
		),
		"general" => array(
			"title" => "",
			"featured" => 0,
			"count" => 0,
			"body" => ""
		),
	);		
	
			
			
			
				
			include("floor.php");			
			include("main.php");
?>
