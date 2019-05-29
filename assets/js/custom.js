
var pos =  new Array('25', '30', '46', '58');
function get_random(){
    var rand = pos[Math.floor(Math.random() * pos.length)];
    return rand;
}

jQuery(document).ready(function($) {
    $('.open-menu').on('click', function(){
        $('.site-menu').slideToggle(200);
        $('body').toggleClass('hide-scroll');
        $('.nav-menu').toggleClass('hide-nav');

        console.log('Show');
    });
});



    /*AccordionTabs jQuery plugin. Author & copyright (c) 2013 : isyara */
(function($){

$.fn.accordionTabs = function(options){

  var defaults = {"autoExpandFirst":false};
  var params = $.extend(defaults,options);

  return this.each(function(){


  //Just test detection mediaqueries
  if (matchMedia) {
    var mq = window.matchMedia( "(max-width: 30em)" );
    if(mq.matches){
      return;
    }
  }



  $(this).on('click', '.open', function(e) {

     e.preventDefault();

     //instance
     $accordion = $(this).parents('.accordion');

     if (!$(this).hasClass('active')) {

      //panel
      $accordion.find('.is-open').removeClass('.is-open').css('height',0);
      $(this).next().addClass('is-open').css('height','auto');

      //tab
      $accordion.find('.active').removeClass('active');
      $(this).addClass('active');
      $(this).css('opacity', '1');
      $('.accordion-item').not(this).css('opacity', '0.4');

      } else if(!$accordion.hasClass('tabs') || ($accordion.hasClass('tabs') && $accordion.find('>li:first-child').css('display') == 'list-item')){

        $accordion.find('.is-open').removeClass('.is-open').css('height',0);
        $(this).removeClass('active');
      }
    });
    $(".close-tabs").click(function(){
        $('.is-open').css('height', '0');
        $('.accordion-item').css('opacity', '1');
    });
  });
}
})(jQuery);


//USE
$(document).ready(function () {

$('.accordion').accordionTabs({"autoExpandFirst":true});
});



//Show more content;

jQuery(document).ready(function($) {
    $('.show-more').on('click', function(){
        let content = $(this).data('trigger');
        console.log(content);

        $('.' + content).toggleClass('show');

        if($('.' + content).hasClass('show')) {
            $('a.show-more ').html('See Less <span>↑</span>');
        } else {
            $('a.show-more ').html('Read More <span>→</span>');
        }
    });
});


$(document).ready(function () {
    $(".card-item .open-item").on( 'click' , function(){
        $(this).parents(':eq(1)').addClass("active");
    });

    $(".card-item .close-item").on( 'click' , function(){

        $('.card-item ul li').removeClass("active");
    });

});
