$(document).ready(function() {
    // Using default configuration
    $('#carousel').carouFredSel();

    // Using custom configuration
    $('#carousel').carouFredSel({
        items                : 5,
        direction            : "left",
        prev: '#prev',
        next: '#next',
        pagination: "#pager",
        scroll : {
            items            : 5,
            easing            : "elastic",
            duration        : 1000,
            pauseOnHover    : true
        }
    });
});