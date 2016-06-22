jQuery(document).ready(function($){

	if (ls.registry.get('block_stream_show_tip')) {
		$('.js-block-gostream-content li:has(.stream-comment-preview)').poshytip({
			className: 'infobox-yellow',
			alignTo: 'target',
			alignX: 'left',
			alignY: 'center',
			offsetX: 10,
			liveEvents: true,
			showTimeout: 1000,
			content: function(updateCallback) {
				return $('.stream-comment-preview', $(this)).html();
			}
		});
	}

});