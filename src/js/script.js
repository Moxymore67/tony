// Back to top functionality
$(function(){
  const btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 200) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, 200);
  });
});

// Toggle content areas
$(function(){
  $("#nav-about").click(function(){
    $("#content-contact, #content-resume, #content-portfolio, #content-blog").hide();
    $("#content-about").show();
  });
  $("#nav-resume").click(function(){
    $("#content-about, #content-contact, #content-portfolio, #content-blog").hide();
    $("#content-resume").show();
  });
  $("#nav-portfolio").click(function(){
    $("#content-about, #content-contact, #content-resume, #content-blog").hide();
    $("#content-portfolio").show();
  });
  $("#nav-blog").click(function(){
    $("#content-about, #content-portfolio, #content-resume, #content-contact").hide();
    $("#content-blog").show();
  });
  $("#nav-contact").click(function(){
    $("#content-about, #content-portfolio, #content-resume, #content-blog").hide();
    $("#content-contact").show();
  });
  $("#quisuisje").click(function(){
    $("#content-contact, #content-portfolio, #content-resume, #content-blog").hide();
    $("#content-about").show();
  });
});

$(function(){
  $("#modal-close").click(function(){
    $('#modal').hide();
  });
});

$(function(){
  $("#theme-switcher-close").click(function(){
    $('#theme-switcher').hide();
  });
});

$(function(){
  $("#dark-theme").click(function(){
    $("body").css("--body-bg","#26262d");
    $("body").css("--content-bg","#31313a");
    $("body").css("--dark-text","#ffffff8c");
    $("body").css("--white-text","#fff");
    $("body").css("--intermediate-text","#f7f7f7");
  });
  $("#mixed-theme").click(function(){
    $("body").css("--body-bg","linear-gradient(to bottom right, #50a3a2 0%, #78cc6d 100%)");
    $("body").css("--content-bg","#31313a");
    $("body").css("--dark-text","#ffffff8c");
    $("body").css("--white-text","#fff");
    $("body").css("--intermediate-text","#f7f7f7");
  });
  $("#light-theme").click(function(){
    $("body").css("--body-bg","linear-gradient(to bottom right, #50a3a2 0%, #78cc6d 100%)");
    $("body").css("--content-bg","#fff");
    $("body").css("--dark-text","#646464");
    $("body").css("--white-text","#26262d");
    $("body").css("--intermediate-text","#626262");
  });
});