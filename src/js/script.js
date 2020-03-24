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
    $("#content-contact, #content-resume, #content-portfolio").hide();
    $("#content-about").show();
  });
  $("#nav-resume").click(function(){
    $("#content-about, #content-contact, #content-portfolio").hide();
    $("#content-resume").show();
  });
  $("#nav-portfolio").click(function(){
    $("#content-about, #content-contact, #content-resume").hide();
    $("#content-portfolio").show();
  });
  $("#nav-contact, #footer-contact").click(function(){
    $("#content-about, #content-portfolio, #content-resume").hide();
    $("#content-contact").show();
  });
});

$(function(){
  $("#modal-close").click(function(){
    $('#modal').hide();
  });
});