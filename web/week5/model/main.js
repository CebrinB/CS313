console.log("here!");


function addToCart(item_id) {
    user_id = 1;

    selector = "#quantity" + item_id;
    console.log(selector);
    
    quantity = document.querySelector(selector).value;
    data = {};
    data["user_id"] = user_id;
    data["item_id"] = item_id;
    data["quantity"] = quantity;
    console.log(data['item_id']);
    $.ajax({
          type: 'POST',
          url: "../support/addtocart.php",
          data: data,  
          success:function(data) {
              console.log("Ajax successful!");
          }
   });
}

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

