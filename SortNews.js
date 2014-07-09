$(document).ready(function() {
		// Return a helper with preserved width of cells
	var fixHelper = function(e, ui) {
		ui.children().each(function() {
			$(this).width($(this).width());
		});
		return ui;
	};
	$('#news_lists tbody tr').prepend('<td class="handle" />');
	$('#news_lists thead tr').prepend('<th />');
	$('#news_lists tbody').sortable({
		helper: fixHelper,
		handle: '.handle'
	});
});