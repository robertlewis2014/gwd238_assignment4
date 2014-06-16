
$(document).ready(function(){
	
	//hides all albums
	$('#main div:not(:first)').hide();
	
	//preps all album links
	$('#albums a').click(function(e){
		e.preventDefault();
		
		//set status indication
		$('#albums a').removeClass('status');
		$(e.target).addClass('status');
		
		var album = e.target.href.split('#')[1];
		$('#main div').hide();
		$('#' + album).show();
		
		//prep gallery
		var firstPic = '#' + album + ' a:first';
		
			$('#pic , #caption').fadeOut('slow' ,function(e){
			$('#pic').attr('src' , $(firstPic).attr('href'));
			$('#caption').text($(firstPic).attr('title'));	
			$('#pic, #caption').fadeIn('slow');
		});
		
		$('#main a').removeClass('status');
		$(firstPic).addClass('status');
		
		});
		
	//preps all gallery links
	$('#main a').click(function(e){
		e.preventDefault();
		
		//set status indication
		$('#main a').removeClass('status');
		$(e.target).addClass('status');
		
		var caption = e.target.title;
		var src = e.target.href;
		
		//fade out pic and caption before changing 
		$('#pic, #caption').fadeOut('slow' , function(e){
				
			//change the pic and caption
			$('#pic').attr('src' , src);
			$('#caption').text(caption);
			$('#pic, #caption').fadeIn('fast');
		});
			});
		
	
	
	});