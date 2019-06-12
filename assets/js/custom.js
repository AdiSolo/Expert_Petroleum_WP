/*
    ==================================================
    Toggle Menu
    ==================================================
*/
jQuery(document).ready(function($) {
    $('.open-menu').on('click', function(){
        $('.site-menu').slideToggle(200);
        $('body').toggleClass('hide-scroll');
        $('.nav-menu').toggleClass('hide-nav');
    });
});


/*
    ==================================================
    AccordionTabs jQuery plugin.
    ==================================================
*/
(function($){

$.fn.accordionTabs = function(options){

  var defaults = {"autoExpandFirst":false};
  var params = $.extend(defaults,options);

  return this.each(function(){


  // //Just test detection mediaqueries
  // if (matchMedia) {
  //   var mq = window.matchMedia( "(max-width: 30em)" );
  //   if(mq.matches){
  //    // return;
  //   }
  // }

  $(this).on('click touchstart tap touch', '.open, .open-tab', function(e) {

     e.preventDefault();

     //instance
     $accordion = $(this).parents('.accordion');

     if (!$(this).hasClass('active') && !$(this).hasClass('open-transform')) {

      //panel
      $accordion.find('.is-open').removeClass('.is-open').css('height',0);
      $(this).next().addClass('is-open').css('height','auto');

      let element_height =  $(this).next().height();

      //tab
      $(".open").removeClass('open-transform');
      $accordion.find('.active').removeClass('active');
      $(this).addClass('active');
      $(this).css('opacity', '1');
      $('.accordion-item').not(this).css('opacity', '0.4');
      $(this).find(".open").addClass('open-transform');
      $(this).find(".open").css('top', element_height + 55);
      }

      else {
          $('.is-open').css('height', '0');
          $(".open").removeClass('open-transform');
          $('.accordion-item').css('opacity', '1');
      }
    });
  });
}
})(jQuery);


//USE
$(document).ready(function () {
    $('.accordion').accordionTabs({"autoExpandFirst":true});
});


/*
    ==================================================
    Show and Read More Content
    ==================================================
*/

jQuery(document).ready(function($) {
    $('.show-more').on('click', function(){
        let content = $(this).data('trigger');
        let that = $(this);

        that.toggleClass('show-less');

        $('.' + content).toggleClass('show');

        if(that.hasClass('show-less')) {
            $(this).html('See Less <span>↑</span>');
        } else {
            $(this).html('Read More <span>↓</span>');
        }
    });
});

/*
    ==================================================
    Team Widget
    ==================================================
*/

$(document).ready(function () {
    $(".card-item li .open-item").on( 'click' , function(){

        let all_parents = $('.card-item ul li');
        let parent = $(this).parents(':eq(0)');
        let parent_index = parent.index();
        let check = 'true';

        $(all_parents).each( function (){
            if($(this).hasClass('active'))
            {
                check = 'true';
            }
        });

        if( !parent.hasClass('active') )
        {
            // check if any li is Active and remove it
            if( check == 'true' ){
                $( all_parents ).removeClass("active");
                $( all_parents ).css("float", 'unset');
                $('.card-item ul li .card-open-btn ').removeClass('rotate');
            }

                parent.addClass("active");
                $(this).addClass('rotate');

                if( parent_index % 2  == 0 ){
                    parent.css('float', 'left');
                    parent.prev().css('float', 'right');
                }
                else
                {
                    parent.css('float', 'right');
                    parent.prev().css('float', 'left');
                }
        }
        else {
            $( all_parents ).removeClass("active");
            $( all_parents ).css("float", 'unset');
            $(this).removeClass('rotate');
        }
    });
});

/*
    ==================================================
    Sidebar menu Scrool Section onScroll
    ==================================================
*/

jQuery(document).ready(function($) {
    $('.second-menu li').on('click', function(){
    let trigger = $(this).attr('data-trigger');

    $('html, body').animate({
          scrollTop: $("." + trigger).offset().top - 100
      }, 1000);

      $(this).addClass('active');
    });
});

/*
    ==================================================
    Add inline class to blocks on Mobile
    ==================================================
*/

jQuery(document).ready(function($) {
    $('.wp-block-column').each( function() {
        if($(this).children().hasClass('m-inline1')){
            $(this).addClass('m-inline1');
        }
    });
});


/*
    ==================================================
    Follow sidebar menu items onSroll
    ==================================================
*/

jQuery(function ($) {
  $(document).ready(function() {
    // Save cover positions and section ID in Array
    var sections = Array();
    var i = 0;
    $(".cover-image").each(function() {
      var section_id = $(this).data('id');
      sections[i] = {
        start: $(this).offset().top,
        stop: ($(this).offset().top + $(this).height()),
        section_id: section_id
      };
      i++;
    });

    $(document).bind('ready scroll', function () {
        var docScroll = $(this).scrollTop(),
            middle = $(window).height() / 3;
    sections.forEach(function(section) {
        	if(docScroll + middle  >= section.start && docScroll + middle < section.stop) {
                $('.second-menu li').removeClass('active')
                $('*[data-trigger="'+ section.section_id +'"]').addClass('active');
          }
        }); // END foreach
    }); // End Bind
  });

});

/*
    ==================================================
    Show / Hide Sidebar Menu onScroll on Mobile
    ==================================================
*/

jQuery(document).ready(function($) {
    var prev = 0;
    var $window = $(window);
    var nav = $('.sticky');
    var elementPos = nav.offset().top;
    var elementHeight = nav.height();

  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $window.on('scroll', function(){
          var scrollTop = $window.scrollTop();
          if ( scrollTop > elementPos + elementHeight){
              nav.toggleClass('fixed-menu-mobile', scrollTop < prev);
              prev = scrollTop;
          }
          else{
              nav.removeClass('fixed-menu-mobile');
          }
        });
    }
});

// jQuery(document).ready(function($) {
//     /*
//         ==================================================
//         Sidebar menu
//         ==================================================
//     */
//
//     $('.load-more').on('click', function(e){
//         e.preventDefault();
//         let post_type = attr('data-type');
//         let ajax_url = attr('data-url');
//         let token = attr('data-token');
//         let page = 2;
// console.log(post_type + '   ' + url);
//         var data =[
//             'action'    : 'load_posts_by_ajax',
//             'post_type' : post_type,
//             'page'      : page,
//             'security': token
//         ];
//
//
//  $.ajax({
//   url : ajaxurl,
//   type : 'post',
//   data : {
//       tag_name : tag_name,
//      page : page,
//      action : 'btn_load'
//   },
//   error : function (response){
//      console.log(response);
//
//   },
//   success : function(response){
//      that.data('page',newPage);
//      $('.tag-posts').append(response);
//   }
//
//   });
//
//     });
//
// });
