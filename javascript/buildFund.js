$(function() {
    result = getUrlVars();
});

function getUrlVars() {
    var url = window.location.href;
    var result = /fundID=([^&]+)/.exec(url)[1];
    $.ajax ({
        url:"php/showFund.php",
        type:"POST",
        dataType:"JSON",
        data: {
            fundID: result
        },
        success: function(response) {
            var id = response.ID;
            var name = response.NAME;
            var desc = response.DESCRIPTION;
            var raised = response.RAISED;
            var goal = response.GOAL;
            var imageSrc = "images/"+response.IMAGE;
            
            $("#fundName").text(name);
            $("#raised").text(raised);
            $("#goal").text(goal);
            $("#desc").text(desc);
            $("#fundImg").attr("src", imageSrc);
        }
        ,
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert (thrownError)
        }
    });
}