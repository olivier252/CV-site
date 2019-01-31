
$(document).ready(function() {
                
// Slider accueil

    $('.slideshow').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        autoplay: false,
        dots: true,
        infinite: true,
        speed: 500,
        fade: false,
        pauseOnHover: false,
    });

//Défilement

    $('.scroll_js_pres').on('click', function() { 
        var page = $(this).attr('#presentation'); 
        var speed = 500; 
        $('html, body').animate( { scrollTop: $('#presentation').offset().top - 129}, speed );
        return false;
    });

    $('.scroll_js_why').on('click', function() {
        var page = $(this).attr('#pourquoi'); 
        var speed = 500;
        $('html, body').animate( { scrollTop: $('#pourquoi').offset().top - 129}, speed ); 
        return false;
    });

    $('.scroll_js_int').on('click', function() {
        var page = $(this).attr('#interet');
        var speed = 500; 
        $('html, body').animate( { scrollTop: $('#interet').offset().top - 129}, speed ); 
        return false;
    });

    $('.scroll_js_taf').on('click', function() {
        var page = $(this).attr('#travail');
        var speed = 500; 
        $('html, body').animate( { scrollTop: $('#travail').offset().top - 129}, speed );
        return false;
    });

//partage boutons facebook/twitter

    $('a.share').on('click touch', function (e){
      e.preventDefault();
      var $link   = $(this);
      var href    = $link.attr('href');
      var network = $link.attr('data-network');

      var networks = {
        facebook : { width : 600, height : 300 },
        twitter  : { width : 600, height : 450 }
      };

      var windowWidth = $(window).width();
      var windowHeight = $(window).height();
      var popupTop = (windowHeight - networks[network].height) / 2 + $(window).scrollTop();
      var popupLeft = (windowWidth - networks[network].width) / 2 + $(window).scrollLeft();

      var popup = function(network){
        var options = 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,';
        window.open(href, '', options+'height='+networks[network].height+',width='+networks[network].width+',top='+popupTop+',left='+popupLeft);
      }

      popup(network);
    });
});




