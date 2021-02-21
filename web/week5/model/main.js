// class Location {
//     constructor(elementId) {
//       this.parentElement = elementId;
//       this.loc = [];
//     }

//     getLocations() {
//         $.ajax({
//             type: 'GET',
//             url: "../support/loadLocations.php",
//             dataType: 'json',
//             success:function(data) {
//                 console.log("Ajax successful!load");
//                 locations = '';
                
//                 $.each(data, function (index, value) {
//                     locations += '<li><a>' + this.location_name + '</a></li>';
//                 });// END LOOP

//                 $('#locations').html(locations);
//             }
//         });
//     }
// }



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

function getCart()
    {
      console.log('checkout run');
      data = {};
      data['username'] = document.querySelector('.username').innerHTML;
      console.log(data['username']);

      $.ajax({
        url: '../support/loadCart.php',
        type: 'GET',
        data: data,
        dataType: 'json', //will parse json into javascript object
        //callback called when suceed
        success: (data) => {
          console.log('ajax success!', data);
             product = "";
             product += "<table class='table table-hover table-bordered table-striped'>";
             product += "<tr><th>Quantity</th><th>Item</th><th>Price</th><th>Subtotal</th></tr>";
            
          $.each(data, function (index, value) {
            
            
            product += "<tr>";
            product += "<td>"+ this.quantity + "</td>";
            product += "<td>"+ this.item_name + "</td>";
            product += "<td>" + "$" + this.item_price + "</td>";
            product += "<td>" + "$" + (this.item_price * this.quantity) + "</td>";
            product += "</tr>";
          });// END LOOP
           
            product += "<td></td><td></td><td>Total: </td><td>" + "$functioncall" + "</td>";
            product += "</table>";
        //added end
          result = "";
          result = product;
          //select status id element display in html
          $('#cart').html(result);
        }//success data call
        
      });//ajax function call
     
      $('#cart').removeClass("username");
    }// End function

    function attempt() {
        
    var return_first;
    function callback(response) {
    return_first = response;
    //use return_first variable here
    }

    $.ajax({
    'type': "POST",
    'global': false,
    'dataType': 'html',
    'url': "ajax.php?first",
    'data': { 'request': "", 'target': arrange_url, 'method': method_target },
    'success': function(data){
        callback(data);
    },
    });
  }


    
    //Erase 
    function erase(){

        result = "";
        $('#results').html(result);
    }

window.addEventListener("load", () => {

    getCart();
    $.ajax({
        type: 'GET',
        url: "../support/loadLocations.php",
        dataType: 'json',
        success:function(data) {
            console.log("Ajax successful!");
            locations = '';
            info = '';
            
            $.each(data, function (index, value) {
                locations += '<li><a type="button">' + this.location_name + '</a></li>';
                info += '<div class="location"><h3>' + this.location_name + '</h3>'
                        + this.address + '</br>'
                        + this.city + ', ' + this.state + ', ' + this.zip + '</br>'
                        + this.location_phone + '</div></br></br>';
            });// END LOOP

            $('#locations').html(locations);
            $('#info').html(info);            
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

