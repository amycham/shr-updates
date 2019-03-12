

<?php
	include('render-avail.php');

	$here = "available";
	$floor = "rooms";
	$title = "Available Rooms";
	$head = "<style type='text/css'>
			@import url(roomfeatures.css);
		</style>";
	$body = render_avail();

			include("roomfeatures.php");
			include("main.php");
?>
