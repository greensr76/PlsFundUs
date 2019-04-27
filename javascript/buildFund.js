$(function() {
    result = getUrlVars();
});

function getUrlVars() {
    var url = window.location.href;
    var captured = /fundID=([^&]+)/.exec(url)[1];
    var result = captured ? captured : 'Default';
    return result;
}