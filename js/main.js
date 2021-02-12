// Navigation

$('.feat-btn').click(function(){
    $('nav ul .feat-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('nav ul li').click(function (){
    $(this).addClass("active").siblings().removeClass("active");
});


// DO something when expanding
$('.sidebar').hover(function(){
    $('.sidebar').css("width", "200px");
    document.getElementById("home").innerHTML = '<i class="fas fa-chess-king"></i>Home';  
    document.getElementById("services").innerHTML = '<i class="fas fa-concierge-bell"></i>Services';
    document.getElementById("play").innerHTML = '<i class="fas fa-play"></i>Play';
    document.getElementById("learn").innerHTML = '<i class="fas fa-book-open"></i>Learn';
    document.getElementById("news").innerHTML = '<i class="fas fa-newspaper"></i>News';
    document.getElementById("blog").innerHTML = '<i class="fas fa-blog"></i>Blog';
    document.getElementById("help").innerHTML = '<i class="fas fa-info-circle"></i>Help';
    document.getElementById("aboutus").innerHTML = '<i class="fas fa-address-card"></i>About us';
    document.getElementById("contactus").innerHTML = '<i class="fas fa-address-book"></i>Contact us';
    document.getElementById("hamburger").innerHTML = '<i class="fas fa-times"></i>';
    $('.ver').css("left", "40%");
}, function(){
    $('.sidebar').css("width", "75px");
    document.getElementById("home").innerHTML = '<i class="fas fa-chess-king"></i>';  
    document.getElementById("services").innerHTML = '<i class="fas fa-concierge-bell"></i>';
    document.getElementById("play").innerHTML = '<i class="fas fa-play"></i>';
    document.getElementById("learn").innerHTML = '<i class="fas fa-book-open"></i>';
    document.getElementById("news").innerHTML = '<i class="fas fa-newspaper"></i>';
    document.getElementById("blog").innerHTML = '<i class="fas fa-blog"></i>';
    document.getElementById("help").innerHTML = '<i class="fas fa-info-circle"></i>';
    document.getElementById("aboutus").innerHTML = '<i class="fas fa-address-card"></i>';
    document.getElementById("contactus").innerHTML = '<i class="fas fa-address-book"></i>';
    document.getElementById("hamburger").innerHTML = '<i class="fas fa-bars"></i>';
    $('.ver').css("left", "20%");
    $('nav ul .feat-show').removeClass("show");
});