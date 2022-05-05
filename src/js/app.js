$(document).ready(function() {
    var url = window.location.pathname;

    url = url.split('/').pop();
    url = url.split('.');

    $('.' + url[0]).addClass('active');

});