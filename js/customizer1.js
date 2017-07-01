(function ($) {
	wp.customize('ads_code', function(value) {
		value.bind(function(newval) {
			$('#ads_box').html(newval);
		});
	});
})(jQuery);