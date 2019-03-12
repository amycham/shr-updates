<?php
	$head = $head."<script language='javascript' type='text/javascript' src='jquery-1.2.6.js'></script>
<script language='javascript' type='text/javascript' src='utils.js'></script>";

$content = "<h1>".$title."</h1>";
	$content = $content."<p>
		<a href='".$here."1st.php'";
		if($floor == "1stfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">1st Floor</a> | 
		<a href='".$here."2nd.php'";
		if($floor == "2ndfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">2nd Floor</a> | 
		<a href='".$here."3rd.php'";
		if($floor == "3rdfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">3rd Floor</a> |	
		<a href='".$here."lower.php'";
		if($floor == "lower")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">Lower</a> | 
		<a href='".$here."general.php'";
		if($floor == "general")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">General Features</a> | 
		<a href='".$here."rooms.php'";
			if($floor == "rooms")
			{
				$content = $content." class='thisfloor'";
			}
	$content = $content.">Room Comparison</a>
	</p>";
	
	
	
	
$photos = '';

	
	$content = $content.$body;
	
	
	$content = $content."<p>
		<a href='".$here."1st.php'";
		if($floor == "1stfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">1st Floor</a> | 
		<a href='".$here."2nd.php'";
		if($floor == "2ndfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">2nd Floor</a> | 
		<a href='".$here."3rd.php'";
		if($floor == "3rdfloor")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">3rd Floor</a> |	
		<a href='".$here."lower.php'";
		if($floor == "lower")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">Lower</a> | 
		<a href='".$here."general.php'";
		if($floor == "general")
		{
			$content = $content." class='thisfloor'";
		}
	$content = $content.">General Features</a> | 
		<a href='".$here."rooms.php'";
			if($floor == "rooms")
			{
				$content = $content." class='thisfloor'";
			}
	$content = $content.">Room Comparison</a>
	</p>";
	
	
			
?>