
//adds an item to cart when the user clicks on it
function addToCart(item_id) {
  username = document.querySelector('.username').innerHTML;

  selector = "#quantity" + item_id;
  
  quantity = document.querySelector(selector).value;
  data = {};
  data["username"] = username;
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

//generates HTML to display a user's cart
function getCart()
  {
    console.log('checkout run');
    data = {};
    data['username'] = document.querySelector('.username').innerHTML;

    $.ajax({
      url: '../support/loadCart.php',
      type: 'GET',
      data: data,
      dataType: 'json', //will parse json into javascript object
      //callback called when succeed
      success: (data) => {
        console.log('ajax success!', data);
           product = "";
           product += "<table class='table table-hover table-bordered table-striped'>";
           product += "<tr><th>Quantity</th><th>Item</th><th>Price</th><th>Subtotal</th></tr>";

           total = 0;

        $.each(data, function (index, value) {
          
          sub = parseFloat(this.item_price * this.quantity).toFixed(2);
          product += "<tr>";
          product += "<td>"+ this.quantity + "</td>";
          product += "<td>"+ this.item_name + "</td>";
          product += "<td>" + "$" + this.item_price + "</td>";
          product += "<td>$<span class='subtotal'>" + sub + "</span></td>";
          product += "</tr>";
          total += parseFloat(sub);
        });// END LOOP
         
          product += "<td></td><td></td><td>Total: </td><td>$<span id='total'>" + total + "</span></td>";
          product += "</table>";
          product += "<button class='btn' onclick='subtotal()'>Update Total</button>";
      //added end
        result = "";
        result = product;
        //select status id element display in html
        $('#cart').html(result);
      }//success data call
      
    });//ajax function call
   
    $('#cart').removeClass("username");
  }// End function


  
  //Erase the cart HTML
  function erase(){
      result = "";
      $('#results').html(result);
  }

  window.addEventListener("load", () => {
    getCart();
 });