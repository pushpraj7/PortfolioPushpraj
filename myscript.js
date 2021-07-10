$(document).ready(function(){

  $(".main-content .about-area .owl-carousel").owlCarousel({
    loop: true,
    autoplay:true,
    dots:true,
    responsive:{
      0:{
        items:1
      }
    }
  })

  let nav_offset_top=$('.header-content').height()+50;

  function navbarFixed(){
    if($('.header-content').length){
      $(window).scroll(function(){
        let scroll=$(window).scrollTop();
        if(scroll>=nav_offset_top){
          $('.header-content .main-menu').addClass('navbar_fixed')
        }else{
          $('.header-content .main-menu').removeClass('navbar_fixed')

        }
      })
    }
  }

  navbarFixed();

});
