// JavaScript Document
$(function() {

	$("#s").val('search');
	$('#s').focus(function() {
		value=$(this).val();
		$(this).attr("value","");
	});
	$('#s').blur(function() {
		if($(this).val()=="") {
			$(this).val(value);
		}
	});
	
	var cycleHolder = $('#slideshow .cycle').cycle({ 
		fx:     'fade', 
		speed:  'fast', 
		next:   '#next', 
		prev:   '#prev' 
	});
	

	$('.views-slideshow-controls-bottom .views-slideshow-pager-field-item').click(function(e){ 
		var goPhoto = jQuery(this).index(); 
		cycleHolder.cycle(goPhoto);
		return false; 

	});

	
	$('#slideshow .widget').each(function(){
		$(this).addClass('box-number-' + $(this).index());									  
	});

});
