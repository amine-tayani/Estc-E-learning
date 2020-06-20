type = ["", "info", "success", "warning", "danger"];

demo = {
    initPickColor: function() {
        $(".pick-class-label").click(function() {
            var new_class = $(this).attr("new-class");
            var old_class = $("#display-buttons").attr("data-class");
            var display_div = $("#display-buttons");
            if (display_div.length) {
                var display_buttons = display_div.find(".btn");
                display_buttons.removeClass(old_class);
                display_buttons.addClass(new_class);
                display_div.attr("data-class", new_class);
            }
        });
    },

    checkScrollForTransparentNavbar: debounce(function() {
        $navbar = $(".navbar[color-on-scroll]");
        scroll_distance = $navbar.attr("color-on-scroll") || 500;

        if ($(document).scrollTop() > scroll_distance) {
            if (transparent) {
                transparent = false;
                $(".navbar[color-on-scroll]").removeClass("navbar-transparent");
                $(".navbar[color-on-scroll]").addClass("navbar-default");
            }
        } else {
            if (!transparent) {
                transparent = true;
                $(".navbar[color-on-scroll]").addClass("navbar-transparent");
                $(".navbar[color-on-scroll]").removeClass("navbar-default");
            }
        }
    }, 17)
};
