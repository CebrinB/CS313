function renderShoppingCartItems(parent) {
  let div = document.createElement('div');
  div.setAttribute('id', 'instructions');
  div.innerHTML =`
  <div>
    <p>Add a horse to see it's possible coat color!</p>
  </div>`;
  parent.appendChild(div);
  return;
}





console.log(document.querySelector('#saddles'));


window.addEventListener("load", () => {
  console.log(document.querySelector('#emptyCart').innerHTML);
  if (document.querySelector('#emptyCart').innerHTML > 0) {
    document.querySelector('#emptyCartLink').style.display = "none";
  }
  renderShoppingCartItems(document.querySelector('#items'));
});

