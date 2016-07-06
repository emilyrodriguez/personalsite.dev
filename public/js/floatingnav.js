'use strict'
        $(document).scroll(function() {
            if ($(this).scrollTop() == 0) {
                $("#floating-nav-content").slideUp(400);
            } else {
                $("#floating-nav-content").slideDown(600);
            }
        });