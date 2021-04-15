// Navigation
$('.feat-btn').click(function(){
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('nav ul li').click(function (){
    $(this).addClass("active").siblings().removeClass("active");
});

// DO something when expanding
x = document.querySelector('.sidebar');
if (screen.width > 1100 || document.body.clientWidth > 1100){
  x.removeAttribute('onclick');
  $('.sidebar').hover(function(){ expand(); }, function() { collapse(); });  
}else if (screen.width <= 1100 || document.body.clientWidth <= 1100){
  x.setAttribute(onclick, 'siusiaczek()');
}

function s(){
  x = document.querySelector('.sidebar');
  if ( x.style.width == "75px") {
    expand();
  }
  else collapse();
};

function expand(){
    $('.sidebar').css("width", "200px");
    document.getElementById("home").innerHTML = '<i class="fas fa-chess-king"></i>Home';  
    document.getElementById("services").innerHTML = '<i class="fas fa-concierge-bell"></i>Services';
    document.getElementById("play").innerHTML = '<i class="fas fa-play"></i>Play';
    document.getElementById("learn").innerHTML = '<i class="fas fa-book-open"></i>Learn';
    document.getElementById("news").innerHTML = '<i class="fas fa-newspaper"></i>News';
    document.getElementById("help").innerHTML = '<i class="fas fa-info-circle"></i>Help';
    document.getElementById("aboutus").innerHTML = '<i class="fas fa-address-card"></i>About us';
    document.getElementById("contactus").innerHTML = '<i class="fas fa-address-book"></i>Contact us';
    document.getElementById("hamburger").innerHTML = '<i class="fas fa-times"></i>';
    $('.ver').css("left", "40%");
    $('nav ul').css("height", "100%");
    $('nav ul li').css("display", "block");
    if (screen.width <= 1100 || document.body.clientWidth <= 1100){
      document.getElementById("play").innerHTML = '<i class="fas fa-play"></i>Play<i style="color:red;font-size: 10px;">(Only for Desktop)</i>';
    }
};

function collapse(){
  $('.sidebar').css("width", "75px");
  document.getElementById("home").innerHTML = '<i class="fas fa-chess-king"></i>';  
  document.getElementById("services").innerHTML = '<i class="fas fa-concierge-bell"></i>';
  document.getElementById("play").innerHTML = '<i class="fas fa-play"></i>';
  document.getElementById("learn").innerHTML = '<i class="fas fa-book-open"></i>';
  document.getElementById("news").innerHTML = '<i class="fas fa-newspaper"></i>';
  document.getElementById("help").innerHTML = '<i class="fas fa-info-circle"></i>';
  document.getElementById("aboutus").innerHTML = '<i class="fas fa-address-card"></i>';
  document.getElementById("contactus").innerHTML = '<i class="fas fa-address-book"></i>';
  document.getElementById("hamburger").innerHTML = '<i class="fas fa-bars"></i>';
  $('.ver').css("left", "20%");
  $('nav ul .feat-show').removeClass("show");
  if((screen.width <= 1100 || document.body.clientWidth <= 1100) && (screen.width > 390 || document.body.clientWidth > 390)){
    $('nav ul').css("height", "10%");
    $('nav ul li').css("display", "none");
    $('nav ul li:first-child').css("display", "block");
    $('nav ul .feat-show').removeClass("show");
  }else if((screen.width <= 390 || document.body.clientWidth <= 390) && (screen.width > 360 || document.body.clientWidth > 360)){
    $('nav ul').css("height", "8%");
    $('nav ul li').css("display", "none");
    $('nav ul li:first-child').css("display", "block");
    $('nav ul .feat-show').removeClass("show");
  }else if(screen.width <= 360 || document.body.clientWidth <= 360){
    $('nav ul').css("height", "7%");
    $('nav ul li').css("display", "none");
    $('nav ul li:first-child').css("display", "block");
    $('nav ul .feat-show').removeClass("show");
  }else{
    $('nav ul').css("height", "100%");
    $('nav ul li').css("display", "block");
    $('nav ul li:first-child').css("display", "block");
    $('nav ul .feat-show').removeClass("show");
  }
};