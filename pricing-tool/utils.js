
$(document).ready(function(){	
		$(".thumb").mouseover(function(){
				var thumbclass = $(this).attr("class");
				var imgroot = thumbclass.split(" ")[1];
				
				$(".lgimg."+imgroot).css("top", ($(this).offset().top-190)).toggle();			
			}).mouseout(function(){
				var thumbclass = $(this).attr("class");
				var imgroot = thumbclass.split(" ")[1];
				$(".lgimg."+imgroot).toggle();
		});
		
		$(".reveal").click(function(){
			var room = $(this).attr("id").split( "_")[0];
			var toshow = "#"+room+"detail";
			var heading = "#"+room+"_heading";			
			
			$(".roomdetail").hide('slow');
			$(".roomnameclicked").attr('class', 'roomname');
			
			//window.location = '#'+room;
			
			$(heading).attr("class", "roomnameclicked");
			$(toshow).show('slow');
						
		});
		
		$('#expandall').click(function(){
					
			$(".roomdetail").show('slow');
			$(".roomname").attr('class', 'roomnameclicked');
			
			return false;
		});
		
		$('.floorthumbs img.small').mouseover(function(e){
		 	var room = $(this).attr("id").split( "_")[0];
			var toshow = "#"+room;
			
			$('.detfull').hide();
			
			var imgpos = (this.offsetTop - 400) + "px";
			$(toshow).show();
			
			$(toshow).css('top', imgpos);
			
		 }).mouseout(function(){
			 var room = $(this).attr("id").split( "_")[0];
			var tohide = "#"+room;
			
			$(tohide).hide();
			
		 });
		
		
	});
		
	
