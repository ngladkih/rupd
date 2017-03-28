$('.accordion').dcAccordion();
$('.list-container select').on('change', function(){
	var theme = $(this);
	var type = null;
	if(theme.attr('id') == 'laboratory-theme_id'){
		type = 'lab_hours';
	}
	if(theme.attr('id') == 'lectures-theme_id'){
		type = 'lect_hours';
	}
	if(theme.attr('id') == 'practical-theme_id'){
		type = 'pract_hours';
	}
	if(theme.attr('id') == 'independent-theme_id'){
		type = 'independent_work';
	}
	$.ajax({
		url: theme.data('route'),
		type: 'POST',
		data: {themeId: theme.val(), type: type},
		success: function(data){
			$('.hours').html('Доступно часов ' + data)
		},
		error: function(){
			alert('Error')
		}
	});
});