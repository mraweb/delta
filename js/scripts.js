// link externo
$(document).ready(function(){
    $("a[rel=external]").attr('target','_blank');
});

// desabilitar skype
jQuery(document).ready(function(){
    jQuery('head').append('<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />')
});

$(".mapa a").click(function(e){
    e.preventDefault();
})

// Link div
$(document).ready(function(){                  
    $(".box-servicos, .box-frota, .box-desentupidora, .box-dedetizacao").click(function(){
        window.location=$(this).find("a").attr("href");return false;
    });
});

// navegacao entre abas
$(document).ready(function() {
    $(".tab_content").hide(); 
        if(location.hash != "") {
        var target = "#"+location.hash.split("#")[1]; // need semicolon at end of line
        $(location.hash).show(); //Show first tab content
        $("ul.tabs li:has(a[href="+target+"])").addClass("active").show();
        rotateTabs=false;
        } else {
        $("ul.tabs li:eq(0)").addClass("active").show(); //Activate first tab
        $(".tab_content:eq(0)").show(); //Show first tab content
    }

    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); 
        $(this).addClass("active"); 
        $(".tab_content").hide(); 
        var activeTab = $(this).find("a").attr("href"); 
        $(activeTab).fadeIn();
        return false
    });
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
$(".fotos li:nth-child(6n), .nav-serv li:nth-child(6n)").addClass("sem-pdg-right");

// facebook
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=277634635592368";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));