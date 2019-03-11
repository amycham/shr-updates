

<?php
	include("single-room.php");

	$here = "44irv";
	$floor = "1stfloor";
	$title = "44 Irvington Road - 1st Floor";

	$mastern = get_room('0001');
	$mastern_rent = $mastern['rent'];
	echo "LOOK HERE: ".$mastern_rent."<br>";
  $garage_rent = $room_info['garage'];
  $outside_rent = $room_info['parkOutside'];
  $utility_share = $room_info['utilShare'];
  $house_address = $room_info['streetAddress'];

	$rooms = array(
	"mastern" => array(
			"room_id" => "0001",
			"title" => "1st floor Master Suite w/ private bath and private entrance, unfurnished",
			"featured" => 1,
			"count" => 32,
			"body" => " <li>Large student room 19.5x13.5</li>
					  <li>Private entrance with private foyer 6x4
					  <li>Marble flooring in foyer and hard wood in student room</li>
					  <li>Separate study or sleeping alkov 6x6</li>
					   <li>Study/sleeping alkove has two windows</li>
					   <li>Entrance from the back close to the parking area</li>
					  <li>Ceiling fan</li>
					   <li>Nice view of back yard</li>
					   <li>Windows in three directions; east, west and north</li>
					   <li>Oak hardwood floor in student room</li>
					    <li>Six windows in student room and study/sleeping alkov</li>
					  <li>Private full bath room directly connected to student room</li>
					  <li>Tile floor in private full bath room</li>

					  <li>Rent $".$mastern_rent.".00/month for room and parking in drive way/back yard, utilities are split. Parking in the garage is $25 additonal per month. </li>"
		),

	"kitchen" => array(
			"title" => "Large Country Kitchen",
			"featured" => 1,
			"count" => 26,
			"body" => "<li>21x14.0</li>
					  <li>Large country kitchen with granite center island and separate dining area</li>
					  <li>Hard wood oak flooring</li>
					  <li>Granite counter tops throughout</li>
					  <li>Range with ceramic top and stainless steel range hood</li>
					  <li>Three windows</li>
					  <li>Dual dishwashers</li>
					  <li>Two large fridges - for optimal storage for four busy
					  students getting ready for tests and having no time to get to the store </li>
					  <li>One fridge is a 25 cf side by side with water and ice dispenser. The other is a large
					   freezer/fridge combo</li>
					   <li>Both fridges have ice makers - so a lot of ice if needed</li>
					  <li>Dual dishwashers - one for clean and one for used</li>
					  <li>Kitchen installed in 2010</li>
					  <li>Directly connected to dining area</li>
					  <li>Lots of storage and cupboards</li>
					  <li>Garbage disposal</li>
					  <li>European style chefs faucet directly o=ver the range - great for cooking</li>
					  <li>Instant hot water tap at the sink from separate faucet - near boiling - be careful </li>
					  <li>Separate butlers pantry behind kitchen provide extra storage </li>
					    <li>Spotlights and over counter lights</li>
					  <li>Microwave</li>"
		),

		"island" => array(
			"title" => "Kitchen island",
			"featured" => 1,
			"count" => 6,
			"body" => "<li>Center island with granite counter top</li>
						<li>On wheels in center of large kitchen</li>
					  <li>Provides additonal working area and storage</li>"
		),
		"chef" => array(
			"title" => "Kitchen features",
			"featured" => 1,
			"count" => 6,
			"body" => "<li>European type chefs faucet over the range</li>
						<li>Ceramic flat cook top for easy cleaning</li>
					  <li>Instant hot water faucet</li>
					  <li>Built in soap dispenser</li>
					  <li>Stainless steel range hood</li>
					  <li>Granite island on wheels in center of kitchen</li>
					  <li>Stainless steel dual dishwashers</li>
					  <li>Garbage disposal</li>"
		),
		"butler" => array(
			"title" => "Butlers Pantry",
			"featured" => 1,
			"count" => 7,
			"body" => "<li>Butlers Pantry - a feature of the old world!</li>
						<li>5x3</li>
					  <li>Nice butlers pantry behind the kitchen</li>
					  <li>Hard wood flooring</li>
					  <li>Granite counter top</li>
					  <li>Butlers Pantry provides additional space for the already large kitchen</li>
					  <li>Recessed ceiling lights and halogen light over the granite counter </li>
					  <li>Easy access to kitchen and basement from Butlers pantry</li>"
		),

		"dining" => array(
			"title" => "Dining area",
			"featured" => 1,
			"count" => 8,
			"body" => " <li>10.0x10.6</li>
						 <li>Full dining area with classical mahagony dining table</li>
						 <li>Classic mahogany wooden panels in dining room</li>
						 <li>Directly connected to kitchen</li>
						 <li>Hard       wood oak floor</li>
						 <li>Side table lamps</li>
						 <li>Nice       art work </li>
						 <li>Spotlights in ceiling on dimmer</li>
						 <li>Nice view of Irvington Road</li>
						 <li>Open layout</li>
						 <li>2 large windows; one facing Irvignton Road</li>"
		),
		"living" => array(
			"title" => "Living Room",
			"featured" => 1,
			"count" => 12,
			"body" => "<li>11x20</li>
					  <li>Five       windows</li>
					   <li>40 inch flat screen high resolution TV</li>
					  <li>Hard       wood floor</li>
					  <li>Brick wood burning open       fire place</li>
					  <li>Built       in book cases</li>
					  <li>Nice       art work</li>
					  <li>Two sofas (can be used for an afternoon nap)</li>
					  <li>Spotlights and side lights on dimmer</li>"
		),
		"foyer" => array(
			"title" => "Front foyer",
			"featured" => 1,
			"count" => 12,
			"body" => "<li>4x3</li>
					  <li>Guest closet</li>
					  <li>Dark green marble floor in foyer</li>
					  <li>Classic pre war entrance door</li>
					  <li>Stair case to 2nd floor</li>
					  <li>Electronic keypad lock on front door for key less entry</li>
					  "
		),

		"backyard" => array(
			"title" => "Back Yard",
			"featured" => 1,
			"count" => 1,
			"body" => "<li>Large very green and inviting back yard</li>
						 <li>Mature trees around the back yard</li>
						 <li>Individual parking spots for each student</li>
						 <li>Fully fenced back yard for optimal privacy</li> "
		),
	);




			include("floor.php");
			include("main.php");

?>
