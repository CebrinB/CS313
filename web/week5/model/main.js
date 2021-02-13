


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
	//e.preventDefault();

	// construct FormData object and load it with the form data
	var formData = new FormData(document.querySelector('form'));
	// value used in php
	formData.append('using', 'ajax');

	// sent data to the POST request
	var request = new XMLHttpRequest();
	request.open("POST", "index.php");
	request.send(formData);
});

