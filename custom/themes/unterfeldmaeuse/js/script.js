(function ($) {
	$(document).ready(function(){
		if($('#block-formblock-gaestebucheintrag').length == 1)
		{
			$('#block-formblock-gaestebucheintrag h2').addClass('toggle').click(function(){
				$('#block-formblock-gaestebucheintrag .content').slideToggle();
			});
			$('#block-formblock-gaestebucheintrag .content').hide();
		}
		
		if($('#webform-client-form-271').length == 1)
		{
			calculate_price();
			$('#webform-client-form-271 select').change(function(){
				calculate_price();
			});
		}
	});
	
	
	function calculate_price()
	{
		var preis_kind = $('[name="submitted[preis_kind]"]').val();
		var preis_erwachsener = $('[name="submitted[preis_erwachsener]"]').val();
		var summe = 0;
		$('#webform-client-form-271 select').each(function(i, e){
			var tickets = 0;
			if($(e).val() != '')
			{
				tickets = parseInt($(e).val());
			}
			if($(e).attr('id') == 'edit-submitted-anzahl-karten-kinder')
			{
				summe += preis_kind * tickets;
			}
			if($(e).attr('id') == 'edit-submitted-anzahl-karten-erwachsene')
			{
				summe += preis_erwachsener * tickets;
			}
		});
		$('#summe').text(summe + ',00 €');
		if(summe > 0)
			$('#edit-submitted-gesamtbetrag-val').val(summe + ',00 €');
		else 
			$('#edit-submitted-gesamtbetrag-val').val(summe);
		toggle_order_form_submit_button();
	}
	
	function toggle_order_form_submit_button()
	{
		if($('#edit-submitted-gesamtbetrag-val').val() == 0)
		{
			$('#webform-client-form-271 .form-submit').attr('disabled', 'disabled');
		} else {
			$('#webform-client-form-271 .form-submit').removeAttr('disabled');
		}
	}
})(jQuery);