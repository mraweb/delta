// link externo
$(document).ready(function(){
    $("a[rel=external]").attr('target','_blank');
});

// desabilitar skype
jQuery(document).ready(function(){
    jQuery('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

// Link div
$(document).ready(function(){                  
    $(".box-servicos, .box-frota, .box-desentupidora, .box-dedetizacao").click(function(){
        window.location=$(this).find("a").attr("href");return false;
    });
});

// carroussel
jQuery(document).ready(function() {
    jQuery(".carousel").jcarousel({
        scroll:1
    });
});

// lightbox
$(document).ready(function(){
    $(".fotos a").colorbox({rel:'fotos a'});
});

// slide home
$(function(){
    // Set starting slide to 1
    var startSlide = 1;
    // Get slide number if it exists
    if (window.location.hash) {
        startSlide = window.location.hash.replace('#','');
    }
    // Initialize Slides
    $('#slides-home').slides({
        preload: true,
        preloadImage: 'img/loading.gif',
        generatePagination: false,
        generateNextPrev: false,
        control: true,
        play: 8000,
        pause: 2500,
        hoverPause: false,
        start: startSlide,
        effect: 'fade'
    });
});

// a cada 6 elementos adiciona a class sem-pdg-right
$(".fotos li:nth-child(6n)").addClass("sem-pdg-right");

// facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277634635592368";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));