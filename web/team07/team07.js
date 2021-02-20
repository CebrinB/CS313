function createPasswordInput(box) {
  
  const passwordLabel = document.createElement('label');
  passwordLabel.innerHTML = "Password:";
  const passwordBox = document.createElement('input');
  passwordLabel.appendChild(passwordBox);
  
  //What name does this password box have?
  let name = "password" + box;
  passwordBox.setAttribute('name', name);
  
  return passwordLabel;
}

function addPasswordBoxes() {
  parentElement = document.querySelector('#parent');
  parentElement.appendChild(createPasswordInput(1));
  parentElement.appendChild(createPasswordInput(2));
}

function hasNumber(password) {
  return /\d/.test(password);
}

addPasswordBoxes();

function clientSideStretch3() {
  password1 = document.querySelector('#password1');
  password2 = document.querySelector('#password2');

  msg = msg = document.querySelector('#error');
  if (password1 === password2) {
    //do something
  } else {
    //add an empty div to the HTML with id #error
    msg.innerHTML = "Your passwords do not match.";
  }; 

  if (password1.length < 7) {
    msg.innerHTML = "Your password must be at least 7 characters in length.";
  }

  if (!hasNumber(password1)) {
    //add 3rd div with number error message
    msg.innerHTML = "Your password must contain a number.";
  } 
}