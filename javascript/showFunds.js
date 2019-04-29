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
      var id = response[i].id;
      var name = response[i].name;
      var desc = response[i].desc;
      var raised = response[i].raised;
      var goal = response[i].goal;
      var imageSrc = "images/"+response[i].image;

      var tr_str = "<tr";
      if (raised >= goal){
        tr_str += " class='fullyFunded'";
      }
      tr_str +=
      (
        "><td>" + "<img class='tableImg' src = " + imageSrc + " onerror='replaceImg(this);'/>" + "</td>" +
        "<td><a href='fund.php?fundID=" + id + "'>" + name + "</a></td>" +
        "<td class='desc'>" + desc + "</td>" +
        "<td >" + raised + "</td>" +
        "<td>" + goal + "</td>" +
      "</tr>"
      );
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

function replaceImg(image){
  image.onerror = "";
  image.src = "./images/test.png";
  return true;
}
