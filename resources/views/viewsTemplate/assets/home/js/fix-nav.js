! function(e) {
    "use strict";
    e('a.js-scroll-trigger[href*="#"]:not([href="#"])').on( "click", function() {
        if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
            var a = e(this.hash);
            if ((a = a.length ? a : e("[name=" + this.hash.slice(1) + "]")).length) return e("html, body").animate({
                scrollTop: a.offset().top - 138
            }, 1e3, "easeInOutExpo"), !1
        }
    }), e(".js-scroll-trigger").on( "click", function() {
        e(".navbar-collapse").collapse("hide")
    }), e("body").scrollspy({
        target: "#mainNav",
        offset: 50
    });
    var a = function() {
			50 < e("#mainNav").offset().top ? e("#mainNav").addClass("navbar-shrink") : e("#mainNav").removeClass("navbar-shrink")
    };
    a(), e(window).scroll(a)
}(jQuery);