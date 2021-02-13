


$(document).ready(function(){
  $('#myModal').on('shown.bs.modal', function () {
      $.ajax({
          type: 'GET',
          url: "item_reviews.php?item_id=1", //this file has the calculator function code
          success:function(data){
           $('#showcal').html(data);
          }
      });
   });
});

