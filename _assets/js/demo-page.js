//Demo Page
if ( $('.demo-page').length ) {

    //Navigation
    $('#primary-navigation').change(function(){
        var _current = $(this).find('option:selected').val();
        $('#' + _current + '').smoothScroll();
    });

    //Simple Tabs Example
    if ( $('.simple-tabs').length ) {

        var simpleTabs = new g5Tabs();
            simpleTabs.init({
                el: $('.simple-tabs')
            });

    }

    //Buttons Example
    if ( $('#buttons-example').length ) {
        $('#buttons-example').find('.button').on('click', function(event){
            event.preventDefault();
        });
    }
    
}