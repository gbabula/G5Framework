/* 

    ============================================

    G5Framework // G5 Tabs

    =============================================

	tabs.js

    --------

    Usage Example:

		<section class="tabs simple-tabs">
		    
		    <ul class="cf">
		        <li class="active"><a href="#" class="first headlink">Tab One</a></li>
		        <li><a href="#" class="headlink">Tab Two</a></li>
		    </ul>

		    <div class="tabs-content cf topspc">

		        <article class="tab active">

		            <h6>Tab One Content</h6>
		                
		                <p>Lorem ipsum dolor sit amet.</p>
		                
		        </article><!--end .tab-->
		        
		        <article class="tab">

		            <h6>Tab Two Content</h6>
		                
		                <p>Lorem ipsum dolor sit amet.</p>
		                
		        </article><!--end .tab-->

		    </div><!--end .tabs-content-->
		    
		</section><!--end .simple-tabs-->

    ==============================================

*/

var g5Tabs = function(el){

	console.log('G5: g5Tabs Executed');

};

g5Tabs.prototype.init = function(tabsObj){

	$tabs = tabsObj.el,
	$tabLink = $tabs.find('.headlink'),
	$tabContent = $tabs.find('.tab');

	if ( $tabLink.length <= 0 || $tabContent.length <= 0 ) {
		throw 'Missing required elements.';
	}

	$tabLink.on('click', function(event) {

		var $this = $(this),
			$li = $this.parent();

        if ( !$li.is('.active') ) {
            $li.addClass('active').siblings('li').removeClass('active');
            $tabContent.hide().removeClass('active').eq($li.index()).show().addClass('active');
        }

	    event.preventDefault();

	});

};
