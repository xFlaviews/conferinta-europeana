document.addEventListener("DOMContentLoaded", function () {
    let navBarToggleButton = document.getElementById('navbar-toggler-button');
    var el_autohide = document.querySelector(".autohide");
    var mainNav = document.getElementById("main_nav");
    if (el_autohide) {
        // Add initial-top class on page load
        el_autohide.classList.add("initial-top");

        var last_scroll_top = 0;
        window.addEventListener("scroll", function () {
            let scroll_top = window.scrollY;
                if (navBarToggleButton.ariaExpanded !== 'true') {
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

                    if (el_autohide.classList.contains("menu-opened")) {
                        el_autohide.classList.remove("menu-opened");
                    }
                    if (mainNav.classList.contains("show")) {
                        mainNav.classList.remove("show");
                    }
                }
                last_scroll_top = scroll_top;
            }
        });

        // Add event listener for button click
        var toggleButton = document.querySelector(".navbar-toggler");
        toggleButton.addEventListener("click", function () {
            el_autohide.classList.toggle("menu-opened");
        });
    }
});
