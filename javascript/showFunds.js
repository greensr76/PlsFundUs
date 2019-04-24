

  $(function(){
      buildFunds();
  });


  function buildFunds(){
    $.ajax ({
        url:"php/getFunds.php",
        method:"POST",
        dataType:"JSON",
      success: function(response) {
           var len = response.length;
           //Retrieve and assign all our information from the php file
           for(var i=0; i<len; i++){
             var name = response[i].name;
             var desc = response[i].desc;
             var raised = response[i].raised;
             var goal = response[i].goal;
             var imageSrc = "images/"+response[i].image;

            //Check if we should use our default image
            if(!validateImg(imageSrc)){
              imageSrc = "images/test.png";
            }

             var tr_str = "<tr>" +
                          // "<td>" + (i+1) + "</td>" + (Could use this line to count them)
                           "<td>" + "<img class = tableImg src = " +imageSrc + " />" + "</td>" +
                           "<td>" + name + "</td>" +
                           "<td>" + desc + "</td>" +
                           "<td>" + raised + "</td>" +
                           "<td>" + goal + "</td>" +
                          "</tr>";
            $("#fundTable tbody").append(tr_str);
          } // for loop
      } // success
        ,
        error: function (xhr, ajaxOptions, thrownError) {
          alert(xhr.status);
          alert (thrownError)
        }
    });
  }

  function validateImg(source){
    var image = new Image();
    image.src = source;

    if (image.width == 0){
      return false;
    }
    else{
      return true;
    }
  }
