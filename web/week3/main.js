function addToCart() {
  var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "browseItems.php?", true);
        xmlhttp.send();

} <?php
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
?>