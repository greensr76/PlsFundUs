

  $(function(){
      buildFunds();
  });


  function buildFunds(){
    $.ajax ({
        url:"getFunds.php",
        method:"POST",
        dataType:"JSON",
      success: function(response) {
           var len = response.length;
           for(var i=0; i<len; i++){
             var id = response[i].id;
             var product_name = response[i].product_name;
             var price = response[i].price;
             var category = response[i].category;
             var tr_str = "<tr>" +
                           "<td>" + (i+1) + "</td>" +
                           "<td>" + product_name + "</td>" +
                           "<td>" + price + "</td>" +
                           "<td>" + category + "</td>" +
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
