console.log("here");

function addToCart() {
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              console.log(document.querySelector('#saddle').value);
            }
        };
        xmlhttp.open("POST", "functions.php?", true);
        xmlhttp.send();
}

window.addEventListener("load", () => {
  console.log(document.querySelector('#emptyCart').innerHTML);
  if (document.querySelector('#emptyCart').innerHTML > 0) {
    document.querySelector('#emptyCartLink').style.display = "none";
  }
});


/*<?php
start_session();
if(isset($_POST['qty'])){
  $qty = $_POST['qty']; 
  if(ctype_digit($qty) || is_integer($qty)){
    $output = $qty * 250;
    $_SESSION['qty'] = $output;
    echo "Updated to \$$output";
  }
}else{
  echo "What the hell are you doing?";
}
?>*/