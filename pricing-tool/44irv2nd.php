


<?php
	include("single-room.php"); 	//always make this the first line of php
	$here = "44irv";
	$floor = "2ndfloor";
	$title = "44 Irvington Road - 2nd Floor";

	/**************************************************************************
	*** create this set of variables for each room. 												***
	*** Use the room stub (eg, mastern) as beginning of each variable				***
	*** Use the unique roomID from the spreadsheet to pass into get_room();	***
	**************************************************************************/
	$mastern = get_room('0004');									//change to roomID from rent-table.csv for each room
	$mastern_rent = $mastern['rent'];							//room rent
  $mastern_garage = $mastern['garage'];				//garage parking rent
  $mastern_outside = $mastern['parkOutside'];	//driveway/yard parking rent
  $mastern_util = $mastern['utilShare'];			//estimated utilities share
  $mastern_addr = $mastern['streetAddress'];	//house street address

	$study = get_room('0005');									//change to roomID from rent-table.csv for each room
	$study_rent = $study['rent'];							//room rent
  $study_garage = $study['garage'];				//garage parking rent
  $study_outside = $study['parkOutside'];	//driveway/yard parking rent
  $study_util = $study['utilShare'];			//estimated utilities share
  $study_addr = $study['streetAddress'];	//house street address

	$mastere = get_room('0002');									//change to roomID from rent-table.csv for each room
	$mastere_rent = $mastere['rent'];							//room rent
	$mastere_garage = $mastern['garage'];				//garage parking rent
	$mastere_outside = $mastere['parkOutside'];	//driveway/yard parking rent
	$mastere_util = $mastere['utilShare'];			//estimated utilities share
	$mastere_addr = $mastere['streetAddress'];	//house street address

	$rooms = array(

		"mastern" => array(
			"title" => "Penthouse w/ private bath, furnished",
			"featured" => 1,
			"count" => 30,
			"body" => "<li>Large size student room 13.8x19.8</li>
			<li>Penthouse with windows in three directions, west, north and east</li>
  <li>Hardwood       floor </li>
  <li>4      windows </li>
  <li>One closet 3.5x2.0</li>
  <li>Ceiling       fan</li>
   <li>Private  bath room directly connected to student room</li>
      <li>Window in bathroom facing back yard</li>
   <li>Room is furnished with a large desk, two book shelves, bed, chair, lamps and area rug</li>

  <li>Rent $".$mastern_rent.".00/month for furished room with private bath and off street parking in driveway/back yard, utilities are split. Parking in the garage
  is $".$mastern_garage." additonal per month.</li>"
		),

		"study" => array(
			"title" => "Master West w/ private bath",
			"featured" => 1,
			"count" => 20,
			"body" => " <li>Study measures 10.4x11.4</li>
    <li>Hard wood floor </li>
    <li>1       window </li>
    <li>Ceiling fan</li>
    <li>One       closet 2x3</li>

    <li>This room has a nice view of Irvington Road and side yard</li>
    <li>The room has a small desk, a desk lamp, chair, dresser and a simple bed, but is otherwise unfurnished</li>
     <li>Private full bath room directly from the study</li>
     <li>Rent $".$study_rent.".00/month for furnished room with private bath and private parking adjacent to garage, utilities are split. Parking in the garage
  is $".$study_garage." additonal per month.</li>
     "
		),


		"mastere" => array(
			"title" => "Master East w/private bath, furnished",
			"featured" => 1,
			"count" => 27,
			"body" => " <li>Large  student room 16.4x10</li>
    <li>Hard wood floor </li>
    <li>2       windows </li>
    <li>Ceiling fan</li>
    <li>Two closets each  2x3</li>

    <li>This bedroom has a nice view Irvington Road and the side yard</li>
    <li>This room is furnished with a full size bed, dresser, lamp, leather desk chair and a large desk with a lamp</li>
     <li>Private full bath room directly from the room</li>
     <li>This is a full size bathroom with a large tub and shower</li>
     <li>This used to be the main bath for the entire house</li>
     <li>The pictures shows the room with different stage of furniture. The six first pictures reflects the current status of the room</li>
    <li>Rent $".$mastere_rent.".00/month for room with private bath and off street parking in driveway/back yard, utilities are split.
    Parking in the garage is $".$mastere_garage." additonal per month.</li>"
		),


		"hall" => array(
			"title" => "Hallway",
			"featured" => 1,
			"count" => 9,
			"body" => "<li>8x6</li>
    <li>Hard wood floor</li>
    <li>Spot lights and nice art works</li>
    <li>Built       in linen closet </li>
    <li>Connects to all four rooms on the second floor</li>"
		)

	);



			//update count when images are added or removed
			$pics = array(
				"pref" => "62ral",
				"count" => 0,
				);

			include("floor.php");
			include("main.php");
?>
