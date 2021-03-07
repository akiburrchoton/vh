// Hero Slider

$('.hero-slider-container').slick({
    fade: true,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false
});

$('.hero-slider-controls .next').click(function(){
    $('.hero-slider-container').slick('next'); 
});

$('.hero-slider-controls .prev').click(function(){
    $('.hero-slider-container').slick('prev'); 
});


$('.counter-holder').slick({
    arrows: false,
    infinite: true,
    dots: false,
    adaptiveHeight: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    draggable: true,
    responsive: [
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
    ]
});



$('.benchmark .card-holder').slick({
    arrows: false,
    infinite: true,
    dots: true,
    adaptiveHeight: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: true,
    responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1.1,
            slidesToScroll: 1,
            infinite: false,
            dots: true
          }
        }
    ]
});


$('.business-cards .card-holder').slick({
    arrows: false,
    infinite: true,
    dots: false,
    adaptiveHeight: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    draggable: true,
    responsive: [
        {
          breakpoint: 993,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1.1,
            slidesToScroll: 1,
            infinite: false,
            dots: true
          }
        }
    ]
});


$('.services .service-holder').slick({
  responsive: [
    {
      breakpoint: 2500,
      settings: "unslick"
    },
    {
      breakpoint: 600,
      settings: {
        arrows: false,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,

      }
    }
  ]
});


$('.blog-container .next').click(function(){
    $('.blog-slider').slick('next'); 
});

$('.blog-container .prev').click(function(){
    $('.blog-slider').slick('prev'); 
});


// testimonial slider
$('.all-review').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: false,
  autoplay: true,
  dots: true,
  autoplaySpeed: 2000,
  loop:true,
  responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    }
  ]
});

$('.slide-left').on('click', function(){
  $('.all-review').slick('prev');
})

$('.slide-right').on('click', function(){
  $('.all-review').slick('next');
})