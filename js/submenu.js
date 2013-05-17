jQuery(document).ready(function() {
    var menus = jQuery('#navMenu li');
    menus.on('mouseenter keyup mouseleave keydown',function(e) {
        clearTimeout($.data(this, 'timer'));
        if(e.type == 'mouseenter' || e.type == 'keyup'){
            if(jQuery(this).find('ul').hasClass('sub')){
                jQuery(this).find('a').eq(0).addClass('current-menu');
            }
        $.data(this, 'timer', setTimeout($.proxy(function() {
            jQuery('.sub', this).stop(true, true).fadeIn('slow');
        }, this), 100));
            
        } else if(e.type == 'mouseleave'){
            jQuery(this).find('a').eq(0).removeClass('current-menu');
            jQuery('.sub', this).stop(true, true).fadeOut();

        } else if(e.type == 'keydown'){
            var totalLi = jQuery(this).find('.sub');
            var qtLi = totalLi.length-1;
            jQuery(this).find('a').eq(0).removeClass('current-menu');
            jQuery(this).find('.sub').eq(qtLi).focusout(function(){
                jQuery('.sub').stop(true, true).fadeOut('slow');
            });
        }
    });
});