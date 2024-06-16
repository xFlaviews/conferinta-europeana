document.addEventListener("DOMContentLoaded", function () {
    var el_autohide = document.querySelector(".autohide");

    if (el_autohide) {
        // Add initial-top class on page load
        el_autohide.classList.add("initial-top");

        var last_scroll_top = 0;
        window.addEventListener("scroll", function () {
            let scroll_top = window.scrollY;

            // Remove initial-top class when user starts scrolling
            if (scroll_top > 0) {
                el_autohide.classList.remove("initial-top");
            } else {
                el_autohide.classList.add("initial-top");
            }

            if (scroll_top < last_scroll_top) {
                el_autohide.classList.remove("scrolled-down");
                el_autohide.classList.add("scrolled-up");
            } else {
                el_autohide.classList.remove("scrolled-up");
                el_autohide.classList.add("scrolled-down");
            }
            last_scroll_top = scroll_top;
        });
    }
});
