$(document).ready(function(){
	$('.content-tab').hide();
	toggletabs('#add');

	$index = 1;
	togglecards('#e'+$index);
	$('#next').click(function(){
		 event.preventDefault(); // cancel default behavior
			$index = $index + 1;
			if($index >= 30){
				$index = 30;
			}
			togglecards('#e'+$index);
	});
	$('#prev').click(function(){
		 event.preventDefault(); // cancel default behavior
			$index = $index - 1
			if($index <= 1){
				$index = 1;
			}
			togglecards('#e'+$index);
	});

	$('.card-pages .mdl-data-table *').click(function(){
		 $('#payrollpage').addClass('expand');
		 $('.card-close').css("display","block")
	});

	$('.card-close').click(function(){
		closecardwindow();
	});
	// this is the id of the form
	$("#search-payroll").submit(function() {

	    var url = "../models/searchpayroll.php"; // the script where you handle the form input.
	    $('#search-results').empty(); 
	     $('#search-results').append('  <div class="mdl-spinner mdl-js-spinner is-active"></div>');

	  
	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $("#search-payroll").serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	           	  $('#search-results').empty(data); 
	             $('#search-results').append(data); // show response from the php script.
	           }
	         });

	   return false;// avoid to execute the actual submit of the form.
	});
});

function toggletabs($element){
	$('.content-tab').fadeOut(500);
	$($element).fadeIn(500);
}

function togglecards($elements){
	$('.card-pages').fadeOut(500);
	$($elements).fadeIn(500);
}

function closecardwindow() {
	$('#payrollpage').removeClass('expand');
	$('.card-close').css("display", "none");
	return false;
}