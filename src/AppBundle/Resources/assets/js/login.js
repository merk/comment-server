(function (document, window, $) {
    "use strict";

    $(document.body).on('click', '#login_box a', function (e) {
        e.preventDefault();

        var loginWindow = window.open(this.href, 'loginWindow');
    });
}(document, window, window.jQuery));