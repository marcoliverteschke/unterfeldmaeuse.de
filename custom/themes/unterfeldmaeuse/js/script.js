(function ($) {
	$(document).ready(function(){
		if($('#block-formblock-gaestebucheintrag').length == 1)
		{
			$('#block-formblock-gaestebucheintrag h2').addClass('toggle').click(function(){
				$('#block-formblock-gaestebucheintrag .content').slideToggle();
			});
			$('#block-formblock-gaestebucheintrag .content').hide();
		}
	});
})(jQuery);
