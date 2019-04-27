$(function() {
    result = getUrlVars();
});

function getUrlVars() {
    var url = window.location.href;
    var result = /fundID=([^&]+)/.exec(url)[1];
    $.ajax ({
        url:"php/showFund.php",
        type:"POST",
        data: {
            fundID: result
        },
      success: function(response) {
          console.log(response);
      } // success
        ,
        error: function (xhr, ajaxOptions, thrownError) {
          alert(xhr.status);
          alert (thrownError)
        }
    });
}