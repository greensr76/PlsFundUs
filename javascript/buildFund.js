$(function() {
    result = buildFund();
});

function buildFund() {
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
            var percent = (raised / goal) * 100;
            var imageSrc = "images/"+response.IMAGE;

            $("#fundName").text(name);
            $("#raised").text(raised);
            $("#goal").text(goal);
            $("#desc").text(desc);
            $(".fundImg").attr("src", imageSrc);
            $("#fundID").val(id);
            if (percent >= 100) {
                $(".form").hide();
                $(".main").append("<h3>Congratulations, you're fully funded!</h3>");
            }

            progressBar();
            function progressBar() {
                var bar = document.getElementById("progressBar");
                var width = 0;
                var id = setInterval(frame, 10);
                function frame() {
                    if (width >= percent) {
                        clearInterval(id);
                    } else {
                        width+=0.5;
                        bar.style.width = width + '%';
                        $("#percent").text(' (' + width * 1 + '%)');
                    }
                }
            }
        }
        ,
        error: function (xhr, ajaxOptions, thrownError) {
            alert(xhr.status);
            alert (thrownError)
        }
    });
}
