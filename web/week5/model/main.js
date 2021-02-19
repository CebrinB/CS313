function addToCart(item_id) {
    user_id = 1;

    selector = "#quantity" + item_id;
    
    quantity = document.querySelector(selector).value;
    data = {};
    data["user_id"] = user_id;
    data["item_id"] = item_id;
    data["quantity"] = quantity;
    $.ajax({
          type: 'POST',
          url: "../support/addtocart.php",
          data: data,  
          success:function(data) {
              console.log("Ajax successful!");
          }
   });
   document.querySelector(selector).value = '';
}

const locations = [];
window.addEventListener("load", () => {

    $.ajax({
        type: 'GET',
        url: "../support/loadLocations.php",
        dataType: 'json',
        success:function(data) {
            console.log("Ajax successful!");
            locations = JSON.parse(data);
            console.log(locations);
        }
    });
    
 });




// document.getElementById('ajax').addEventListener('click', (e) => {
// 	// prevent default
// 	e.preventDefault();

// 	// construct FormData object and load it with the form data
// 	//var formData = new FormData(document.querySelector('form'));
// 	// value used in php
// 	//formData.append('using', 'ajax');

//     var item_id = document.querySelector('#item_id').value;
//     console.log(item_id);

// 	// sent data to the POST request
// 	var request = new XMLHttpRequest();
// 	request.open("GET", "shop_copy.php");
// 	request.send(item_id);
//     console.log(item_id);
// });

