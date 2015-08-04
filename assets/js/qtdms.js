// Javascript functions here are ONLY for main window, for AJAX called-pages, JS codes are in its respective pages.

$(window).load(function() {
		// Animate loader off screen
		
	});


$(document).ready(function(){
	$counter = 0;

	$(".nav-add").click(function() {
		
			toggletabs("#add");
			loadmodule("../qt_forms/form_addpayroll.php", "#add");
			
	
	});

	$(".nav-search").click(function() {
			
				toggletabs("#search");
				loadmodule("../qt_forms/form_searchpayroll.php", "#search-inner");
			
	});

	$(".nav-all").click(function() {
				toggletabs("#all");
				loadmodule("../models/viewallpayroll.php", "#all");
	});



	if(window.location.hash == "#m1"){
		toggletabs('#add');
		loadmodule("../qt_forms/form_addpayroll.php", "#add");
	}else if(window.location.hash == "#m2"){
		toggletabs('#search');
		loadmodule("../qt_forms/form_searchpayroll.php", "#search-inner");
	}else if(window.location.hash == "#m3"){
		toggletabs("#all");
		loadmodule("../models/viewallpayroll.php", "#all");
	}



});
function toggletabs($element){
	$('.content-tab').hide(0);
	$($element).show(500);
}

function loadmodule($url, $container) {
		$($container).empty();
	  	$('.loading').css('display', 'block');			
	     
	    $.ajax({
	           type: "POST",
	           url: $url,
	           
	           success: function(data)
	           {
	           	  $($container).empty(data); 
	             $($container).append(data); // show response from the php script.
	             	$('.loading').css('display', 'none');	
	           }
	         });
   
		
}

function instantsearch($value) {
	$url = "../models/searchclient.php";
	   $.ajax({
	           type: "GET",
	           url: $url,
	           data: {"q":$value},
	           success: function(data)
	           {
	           	  $('.searchresults').empty(data); 
	             $('.searchresults').append(data); // show response from the php script.
	             	
	           }
	         });
}

function setValue($string){
	$('#client').val($string);
	$('.searchresults').empty();
}