$('body').css({
  opacity: 1
})

// Footer accordion

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


// Mobile navigation
var bodyY;

// $('.mobile-nav-hamburger').click(function(){
//   $('#mobile-nav').addClass('active');
//   bodyY = window.pageYOffset;
//   setTimeout(function(){
//     $('body').addClass('freeze');
//   }, 200);

// });

$('#close-mob-nav').click(function(){
  $('#mobile-nav').removeClass('active');
  $('body').removeClass('freeze');
  window.scroll(0,bodyY);
  if(window.pageYOffset > 700){
    setTimeout(function(){
      $('.sticky-mob-nav').css('transform', 'translateY(0px)');          
    }, 200);
  }
});

$('#mobile-main-menu .menu-item-has-children').click(function(e){
  $(this).toggleClass('active');
});




// Video functionality

$('.play-btn').click(function(){
  $('.video-overlay').fadeOut(300);
  $('.custom-video').attr('controls', 'controls');
  document.querySelector('.custom-video').play();
});



// Tabs

function changeTab(evt, name) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  //document.getElementById(name).style.display = "block";
  $('#tab-'+name).fadeIn();
  evt.currentTarget.className += " active";
}


// Disable contact button on submit

$('.wpcf7-submit').click(function(){
  $('.wpcf7-submit').addClass('disabled');
  setTimeout(function(){
    $('.wpcf7-submit').removeClass('disabled');
  }, 3000)
});


// Remove header and footer from header and footerless page template
$(document).ready(function(){
  $('#submit-check').click(function(){
    if($('#submit-check').is(':checked')){
      $('#contact-form-submit').removeClass('disabled');
    }
    else{
      $('#contact-form-submit').addClass('disabled');
    }
  })
  $('.page-template-header-footerless').parents('html').addClass('no-header-footer');
})



// Prevent click on mobile hamburger menu with child menus

$('#mobile-main-menu .menu-item-has-children > a').click(function(e){
  e.preventDefault();
});



// Breakdown show button

$('#collapse-breakdown').click(function(){
  $(this).parents('.breakdown-points').toggleClass('breakdown-show');
  $(this).toggleClass('less');
  if($(this).hasClass('less')){
    $('#collapse-breakdown').html('See less <span><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"></path></svg></span>');
  }
  else{
    $('#collapse-breakdown').html('See more <span><svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.61009 5.81895L0.16055 1.42857C0.0535168 1.32296 0 1.19472 0 1.04385C0 0.892975 0.0535168 0.764734 0.16055 0.659123L0.665138 0.161245C0.772171 0.0556341 0.902141 0.00282885 1.05505 0.00282885C1.20795 -0.0122584 1.33792 0.0330033 1.44495 0.138614L5 3.64639L8.55505 0.138614C8.66208 0.0330033 8.79205 -0.0122584 8.94495 0.00282885C9.09786 0.00282885 9.22783 0.0556341 9.33486 0.161245L9.83945 0.659123C9.94648 0.764734 10 0.892975 10 1.04385C10 1.19472 9.94648 1.32296 9.83945 1.42857L5.38991 5.81895C5.28287 5.93965 5.1529 6 5 6C4.8471 6 4.71713 5.93965 4.61009 5.81895Z" fill="#45515C"></path></svg></span>');
  }
});




// Modal pdf opener
// var bodyY;

// $('.view-pdf-btn').click(function(e){
//   bodyY = window.pageYOffset;
  
//   $('body').addClass('freeze');
//   var pdf_url = $(this).data("pdf");
//   e.preventDefault();
//   $('.the-pdf').attr('src', pdf_url);
//   $('.pdf-viewer').fadeIn(120);
  
// });

// $('#modal-close').click(function(){
//   $(this).parents('.pdf-viewer').fadeOut(120);
//   $('body').removeClass('freeze');
//   window.scroll(0,bodyY);
// });


// Highlight all on hover

$('.hover-effect').hover(function(){
  var col_num = $(this).data('hov');
  $('.hover-effect[data-hov="'+col_num+'"]').css('background-color', 'rgba(242, 244, 247, 0.5)');
});

$('.hover-effect').mouseleave(function(){
  var col_num = $(this).data('hov');
  $('.hover-effect[data-hov="'+col_num+'"]').css('background-color', '#ffffff');
});



$('.single--package').click(function(){
  $(this).find('.package-tics').toggleClass('active');
  $(this).find('.package-tics').css('max-height', '0');
  var card_height = $(this).find('.package-tics.active').prop('scrollHeight') - 15;
  $(this).find('.package-tics.active').css('max-height', card_height + 'px');
  $(this).find('.see-more-btn').toggleClass('active');
  $(this).find('.see-more-btn .body-2').text('See details');
  $(this).find('.see-more-btn.active .body-2').text('Hide details');
});



// Mobile version footer acc

$('.footer-mob .col h4').addClass('accordion').addClass('lead-text');
$('.footer-mob .col .textwidget').siblings('h4').removeClass('accordion');
$('.footer-mob .col > div').addClass('panel');
$('.footer-mob .col .textwidget').removeClass('panel');

$('.footer-mob .col .accordion').click(function(){
  $(this).toggleClass('active');
  $(this).next().css('max-height', '0');
  var card_height = $(this).next().prop('scrollHeight') - 15;
  $(this).parents('.col').children('.active').next().css('max-height', card_height + 'px');
});





// Custom file upload btn
$('#upload-button').click(function(){
  $('#upload-file').click();
});


// parallax images

$(document).ready(function(){
  const images1 = document.querySelectorAll('.parallax-images .image-one');
  var instance1 = new simpleParallax(images1, {
    delay: 1.8,
    scale: 1.2,
    overflow: true,
    orientation: 'up'
  });

  const images2 = document.querySelectorAll('.parallax-images .image-two');
  var instance2 = new simpleParallax(images2, {
    delay: 1.8,
    scale: 1.2,
    overflow: true,
    orientation: 'down'
  });

  // const images3 = document.querySelectorAll('.call-to-action .bg-image img');
  // var instance3 = new simpleParallax(images3, {
  //   delay: 1.8,
  //   scale: 1.2,    
  //   orientation: 'up',
  //   overflow: false
  // });


  $(window).scroll(function(){
  
    instance1.refresh();
    instance2.refresh();
    //instance3.refresh();
    
  })
});



$('.close-message-box').on('click', function(){
  $('.message-box').fadeOut(300);
});


function openTab(current, node){
  $('.tab-content-default').hide();
  $('.middle-topic-title').css({
    display: 'flex'
  })
  $(node).parent().find('.tab-content').hide();
  $(current).parent().find('.single-topic').removeClass('active');
  $(current).addClass('active');
  $(node).css({
    display: 'flex'
  });
}

$('.help-conditional-tab .topics .single-topic').on('click', function(){
  $('.right-content').fadeOut(300);
});

$('.help-conditional-tab .middle-content .single-topic').on('click', function(){
  $('.right-content').fadeIn(300);
})


function openTabMob(current, node){
  $(node).parent().find('.tab-content').hide();
  $('.right-content').css({
    display: 'none'
  });
  $(node).css({
    display: 'block'
  });
}

$('.middle-content .single-topic').click(function(){
  $('.right-topic-title').css({
    display: 'block'
  })
});

$('.topics-mob .single-topic').click(function(){
  $('.middle-content-mob').css({
    opacity: '1',
    right: '0'
  })
});


$('.topics-mob .topic-list .single-topic').on('click', function(){

  var header_title = $(this).find('.topic-text').text();

  $('.middle-content-mob #middle-header-title').text(header_title);

  $('.topics-mob .topic-list').css({
    display: 'none'
  })
  $('.middle-content-mob').css({
    display: 'block'
  });
  $('.middle-content-mob .middle-topic-title').css({
    display: 'flex'
  });


});


$('#header-middle').on('click', function(){

  $('.topics-mob .topic-list').css({
    display: 'block'
  })

  $('.middle-content-mob').css({
    display: 'none',
  })

});


$('.middle-content-mob .single-topic').on('click', function(){

  var header_title_middle = $(this).find('.topic-text').text();

  $('#last-header-title').text(header_title_middle);


  $('.middle-content-mob').hide();

  $('.right-topic-title').css({
    display: 'flex'
  });
  $('.middle-content-mob .single-topic').removeClass('active');
  $(this).addClass('active'); // override active class to remove active style. This is a reverse process.
  $('.right-content-mob').css({
    display: 'block'
  })

});


$('#header-last').on('click', function(){

  $('.middle-content-mob').css({
    display: 'block'
  })

  $('.right-content-mob').css({
    display: 'none',
  })

});



$('.radio-selections label').on('click', function(){
  $('.radio-selections label').removeClass('active');
  $(this).addClass('active');
});

var step_count = 1;

$('.multistep-next').on('click', function(){

  if(step_count < 4){
    $('.form-step').css({
      display: 'none'
    })
    step_count++;
    $('#step'+step_count).css({
      display: 'block'
    })
  }
  else{
    $('#step'+step_count).css({
      display: 'flex'
    })    
  }

});

$('.multistep-reset').on('click', function(){
  step_count = 0;
  
  if(step_count < 4){
    $('.form-step').css({
      display: 'none'
    })
    step_count++;
    $('#step'+step_count).css({
      display: 'block'
    })
  }
  else{
    $('#step'+step_count).css({
      display: 'flex'
    })    
  }

});



$('.multistep-back').on('click', function(){

  if(step_count < 4){
    $('.form-step').css({
      display: 'none'
    })
    step_count--;
    $('#step'+step_count).css({
      display: 'block'
    })
  }
  else{
    $('#step'+step_count).css({
      display: 'flex'
    })    
  }

});

$('nav').addClass('active');

$('#header-search-btn').on('click', function(){
  $('.mag-icon').fadeToggle(300);
  $('.cross-icon').fadeToggle(300);

  setTimeout(() => {
    $('#main-navigation').toggleClass('active');
  }, 100);

  setTimeout(() => {
    $('#header-search-bar').toggleClass('active');
  }, 200);

});


function activate_nav(){
  $('.body-overlay').fadeIn(300);
  $('body').addClass('nav-active');
  
  if($(window).width() > 1201){
    $('html').addClass('freeze');
  }
}

function deactivate_nav(){
  $('.body-overlay').fadeOut(300);
  $('body').removeClass('nav-active');

  if($(window).width() > 1201){
    $('html').removeClass('freeze');
    $('body').removeClass('nav-active');
  }
}


$('#main-navigation li').on('click', function(){
  $('#main-navigation li').not($(this)).removeClass('active');
  
  if($(this).hasClass('active')){
    $(this).removeClass('active');
    deactivate_nav();
  }
  else{
    $(this).addClass('active');
    activate_nav();
  }
 

  

});


$('body').on('click', function(e){
  if(!($(e.target).parents('nav').length) || $(e.target).hasClass('container')){
    $('#main-navigation li').removeClass('active');
    
    deactivate_nav();
  }
})

$('#mobile-nav-hamburger').on('click', function(){
  $('html').addClass('freeze');
  $(this).toggle();
  $('#mobile-nav-close').toggle();
  $('#mob-navigation').toggleClass('active');
});

$('#mobile-nav-close').on('click', function(){
  $('html').removeClass('freeze');
  $(this).toggle();
  $('#mobile-nav-hamburger').toggle();
  $('#mob-navigation').toggleClass('active');
});


$('.sub-sub-menu').prev().addClass('has-child');
$('.mega-menu').prev().addClass('has-child');

$('.sub-menu-item').on('mouseover', function(){
  $('.sub-sub-menu').css({
    display: 'none'
  });
  $(this).next().css({
    display: 'flex'
  });
});

$('.sub-sub-menu').on('mouseover', function(){
  $(this).prev().trigger('mouseover');  
  $(this).prev().addClass('hover-effect');
});

$('.sub-sub-menu').on('mouseout', function(){
  $(this).css({
    display: 'none'
  })
  $(this).prev().removeClass('hover-effect');
})

$('.mob-menu-level-1').show();

var saved_step = [];

function showInnerTab(current, target){
  $('.mob-inner-nav-items').hide();
  saved_step.push($(current).parent().prop('id'));
  var target_elem_title = $(target).find('.responsive-mob-header-title');
  target_elem_title.text($(current).text());

  $(target).show();
}

$('.back-header-responsive').on('click', function(){
  $('.mob-inner-nav-items').hide();
  $('#'+saved_step.pop()).show();
});


if($('#breadcrum').next().hasClass('services')){
  if($(window).width() > 601){
    $('#breadcrum').next().find('.container').css({
      'padding-top': '90px'
    })
  }
  else{
    $('#breadcrum').next().find('.container').css({
      'padding-top': '70px'
    })
  }
}


// Booking Page JS

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  next_fs = $(this).parent().next();
  
  //activate next step on progressbar using the index of next_fs
  $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
  
  //show the next fieldset
  next_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale current_fs down to 80%
      scale = 1 - (1 - now) * 0.2;
      //2. bring next_fs from the right(50%)
      left = (now * 50)+"%";
      //3. increase opacity of next_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
      next_fs.css({'left': left, 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
  });
});

$(".previous").click(function(){
  if(animating) return false;
  animating = true;
  
  current_fs = $(this).parent();
  previous_fs = $(this).parent().prev();
  
  //de-activate current step on progressbar
  $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
  
  //show the previous fieldset
  previous_fs.show(); 
  //hide the current fieldset with style
  current_fs.animate({opacity: 0}, {
    step: function(now, mx) {
      //as the opacity of current_fs reduces to 0 - stored in "now"
      //1. scale previous_fs from 80% to 100%
      scale = 0.8 + (1 - now) * 0.2;
      //2. take current_fs to the right(50%) - from 0%
      left = ((1-now) * 50)+"%";
      //3. increase opacity of previous_fs to 1 as it moves in
      opacity = 1 - now;
      current_fs.css({'left': left});
      previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
    }, 
    duration: 800, 
    complete: function(){
      current_fs.hide();
      animating = false;
    }, 
    //this comes from the custom easing plugin
    easing: 'easeInOutBack'
  });
});

$(".submit").click(function(){
  return false;
})

