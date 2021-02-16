

/*$(document).ready(function(){
  $('#myModal').on('shown.bs.modal', function () {
      $.ajax({
          type: 'GET',
          url: "item_reviews.php?item_id=1", //this file has the calculator function code
          success:function(data){
           $('#showcal').html(data);
          }
      });
   });
});*/

document.getElementById('ajax').addEventListener('click', (e) => {
	// prevent default
	e.preventDefault();

	// construct FormData object and load it with the form data
	//var formData = new FormData(document.querySelector('form'));
	// value used in php
	//formData.append('using', 'ajax');

    var item_id = document.querySelector('#item_id').value;
    console.log(item_id);

	// sent data to the POST request
	var request = new XMLHttpRequest();
	request.open("GET", "shop_copy.php");
	request.send(item_id);
    console.log(item_id);
});

