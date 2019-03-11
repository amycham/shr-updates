<?php
	$head = "<script language='javascript' type='text/javascript' src='jquery-1.2.6.js'></script>
<script language='javascript' type='text/javascript' src='utils.js'></script>";

$content = "<h1>".$title."</h1><p><strong>Click a room name below, or click one of the featured pictures to the right, to view the details and more photos for that room.</strong></p>
	";
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
	
	$content = $content."<p style='font-size: 1.3em;'><strong><a href='#' id='expandall'>Expand all</a></strong></p>";
	
$photos = '';

foreach ($rooms as $key => $value)
{
	//room heading
	$content = $content."<h2 class='roomname reveal' id='".$key."_heading'><a name='".$key."'>".$value["title"]."</a></h2>";
		
	
	//open div to hold details
	$content = $content."<div class='roomdetail' id='".$key."detail'";
	if(sizeof($rooms) == 1)
	{
		$content = $content."style='display: block;'";
	}
	$content = $content.">";
	//room detail bullets
	$content = $content."<ul>".$value["body"]."</ul>";
	
	//if we've got pictures, write out thumbs
	if($value["count"] > 0)
	{
		$thumbs = "";
		$full = "";
		for($i=0; $i<$value["count"]; $i++)
		{
			$curr = $i + 1;
			$thimgpath = "images/".$here."/".$floor."/thumb/".$key.$curr.".jpg";
			$thumbs = $thumbs."<img id='".$key.$curr."_th' class='small' src='".$thimgpath."' />";
			
			$imgpath = "images/".$here."/".$floor."/".$key.$curr.".jpg";
			$full = $full."<img class='detfull' id='".$key.$curr."' src='".$imgpath."' />";
		}
		$content = $content."<div class='floorthumbs'>".$thumbs.$full."</div>";
	}
	
	//close details div
	$content = $content."</div>";
	
	//set featured pics for the page
	if($value["featured"])
	{
		
			$stub = $key;
			
			$photos = $photos."
			<img class='featured reveal' id='".$key."_featured' src='images/".$here."/".$floor."/featured/".$stub.".jpg' />";
		
	}
}
	
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