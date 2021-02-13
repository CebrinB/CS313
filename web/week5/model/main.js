


$(document).ready(function(){
  $('#myModal').on('shown.bs.modal', function () {
      $.ajax({
          type: 'GET',
          url: "item_reviews.php", //this file has the calculator function code
          success:function(data){
           $('#showcal').html(data);
          }
      });
   });
});

