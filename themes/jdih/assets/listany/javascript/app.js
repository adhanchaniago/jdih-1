
	(function($){
		$('#PeraturanSearch').on('keyup paste change keydown selected', 'input, select', function(){
			var $form = $(this).closest('form');
			$form.request();
		});
	})(jQuery);

	//Pagination part
 //    $('#PeraturanSearch').on('select change click', '.pagination > li > a', function (event) {
	//     var page = $(this).text();
	//     event.preventDefault();
	//     if ($(this).attr('href') != '#') {
	//         $("html, body").animate({scrollTop: 0}, "fast");
	//         $.request('onSearchPeraturan', {
	//             data: {page: page},
	//             update: {'peraturan/peraturan': '#partialPeraturan', 'peraturan/pagination': '#partialPagination'}
	//         });
	//         console.log(page);
	//     }
	// });

    $("#next").click(function() {
	    var isLastElementSelected = $('#mycars > option:selected').index() == $('#mycars > option').length -1;

	    if (!isLastElementSelected) {     
	        $('#mycars > option:selected').removeAttr('selected').next('option').attr('selected', 'selected'); 
	    } else {
	           $('#mycars > option:selected').removeAttr('selected');
	           $('#mycars > option').first().attr('selected', 'selected'); 
	     }   
	});

	$("#prev").click(function() {
	    var isFirstElementSelected = $('#mycars > option:selected').index() == 0;

	    if (!isFirstElementSelected) {
	       $('#mycars > option:selected').removeAttr('selected').prev('option').attr('selected', 'selected');
	    } else {
	         $('#mycars > option:selected').removeAttr('selected');
	         $('#mycars > option').last().attr('selected', 'selected'); 
	    }

	});

	