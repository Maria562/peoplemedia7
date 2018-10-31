$(document).ready(function () {
    $(".carousel").carousel({interval: 3e3}), $(".home-carousel").slick({
        autoplay: !0,
        autoplaySpeed: 2e3,
        arrows: !1,
        dots: !0,
        infinite: !0,
        speed: 500,
        fade: !0,
        cssEase: "linear",
        appendDots: $(".home-intro-content")
    }), $(".slick-dots li button").html("");
    var e = $("header");
    $(window).scroll(function () {
        $(document).scrollTop() > 50 ? (e.addClass("scrolled"), e.addClass("shadow"), e.hasClass("home") && e.removeClass("home-header")) : (e.removeClass("scrolled"), e.removeClass("shadow"), e.hasClass("home") && !e.hasClass("other-pages") && e.addClass("home-header"))
    })
}), $(document).ready(function () {
    $(".carousel-item:first").addClass("active")
}), $(document).ready(function () {
    $(window).width() < 992 && $(".navbar-collapse .navbar-nav .nav-item .nav-link").click(function () {
        return $(this).parent().find("ul").length ? ($(this).parent().find("ul").slideToggle(200), !1) : void 0
    })
}), $(".hinareni_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".hinareni").addClass("mapclass"), $(".hinareni").css({left: o + "px", top: i + "px"})
}, function () {
    $(".hinareni").removeClass("mapclass")
}),


$(".areni_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".areni").addClass("mapclass"), $(".areni").css({left: o + "px", top: i + "px"})
}, function () {
    $(".areni").removeClass("mapclass")
}),



$(".maran_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".maran").addClass("mapclass"), $(".maran").css({left: o + "px", top: i + "px"})
}, function () {
    $(".maran").removeClass("mapclass")
}), $(".trinity_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".trinity").addClass("mapclass"), $(".trinity").css({left: o + "px", top: i + "px"})
}, function () {
    $(".trinity").removeClass("mapclass")
}), $(".getnatoun_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".getnatoun").addClass("mapclass"), $(".getnatoun").css({left: o + "px", top: i + "px"})
}, function () {
    $(".getnatoun").removeClass("mapclass")
}), $(".old_map").hover(function () {
    var e = this.getBoundingClientRect(), t = document.getElementById("Layer_1"), n = t.getBoundingClientRect(),
        a = ($(window).width() - $(".home-trail-content").width()) / 2, o = e.x - a + 30, i = e.y - n.y;
    $(".old").addClass("mapclass"), $(".old").css({left: o + "px", top: i + "px"})
}, function () {
    $(".old").removeClass("mapclass")
});
$(document).ready(function () {
    $('.nav-item .nav-link').click(function () {
        $(this).toggleClass('j-click');
    });
    
    if ($(window).width() < 992) {
       $('#navbarSupportedContent').css('display', 'none');
        
    }
    
});