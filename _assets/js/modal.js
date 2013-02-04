/* 

    ============================================

    G5Framework

    =============================================

	G5 Modal

    --------

    Usage Examples:

		<a href="#" rel="modal" data-modal_content="example">Load Example Modal</a>

		Data:
			
			modal_type = style to associate with modal (standard by default)
			modal_content = ID of element to be loaded

		Exit Ramp Modal:

		<a href="http://google.com" rel="external">Exit Ramp</a>

	Required Elements:

		<div class="overlay">
		    <div class="overlay-bg">&nbsp;</div>
		    <article class="overlay-content">&nbsp;</article>
		</div><!--end .overlay-->

    ==============================================

*/

var g5Modal = {
	elements: {
		overlay: $('.overlay'),
		overlayBg: $('.overlay-bg'),
		overlayContent: $('.overlay-content'),
		openAnchor: $('a[rel="modal"], a[rel="external"]'),
		closeAnchor: $('.modal-close, .overlay-bg')
	},
	openModal: function(el, modalType, exitLink){
		var el = $('#' + el + ''),
			modalType = modalType || 'standard',
			modalMarkUp = el.html(),
			overlayContent = g5Modal.elements.overlayContent,
			externalLink = exitLink || null;

		overlayContent.html(modalMarkUp);

		(function() {

			var modalBase = overlayContent.children('.modal');

			if ( modalType === 'standard' ) {

				modalBase.addClass('standard active');

			} else if ( modalType === 'secondary' ) {

				modalBase.addClass('secondary active');

			} else if ( modalType === 'exit-ramp' ) {

				modalBase.addClass('standard active');

				var _continueLink = modalBase.find('.exit-continue');

				_continueLink.attr({
					href: externalLink,
					target: '_blank'
				});

			}

			g5Modal.elements.overlay.fadeIn(250);

			modalBase.css('margin-top', '-' + (modalBase.innerHeight() / 2) + 'px');
			modalBase.find('.modal-close, .exit-cancel').on('click', function(event){
				g5Modal.closeModal();
				event.preventDefault();
			});

		})();
	},
	closeModal: function(){
		g5Modal.elements.overlay.removeClass('active').fadeOut(250);
	},
	events: function(){
		g5Modal.elements.openAnchor.on('click', function(event){
			var $this = $(this),
				_modalData = $this.data(),
				_modalType = _modalData.modal_type || 'exit-ramp',
				_modalContent = _modalData.modal_content || 'exit-ramp';

			if ( $this.attr('rel') === 'external' ) {
				var externalLink = $this.attr('href');
				g5Modal.openModal(_modalContent, _modalType, externalLink);
			} else {
				g5Modal.openModal(_modalContent, _modalType);
			}

			event.preventDefault();
		});

		g5Modal.elements.closeAnchor.on('click', function(event){
			g5Modal.closeModal();
			event.preventDefault();
		});

		//Keyboard
		$(document).keyup(function(e){
			if ( g5Modal.elements.overlay.is(':visible') ) {
		        if ( e.keyCode === 27 ) { 
		        	g5Modal.closeModal(); 
		        } 
			}
		});
	},
	init: function(){
		if ( g5Modal.elements.overlay.length <= 0 ) {

			throw 'Overlay Elements Not Found';

		} else {

			this.events();

		}
	}
}
