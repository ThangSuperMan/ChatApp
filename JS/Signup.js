const form = document.querySelector(".form form");
const continueButton = form.querySelector(".button input");

form.addEventListener("submit", (e) => {
  // prevent form submit when the user submit
  e.preventDefault();
});

continueButton.addEventListener("click", () => {
  //   Ajax start
  var xhr = new XMLHttpRequest(); // Create XML Object
  xhr.open("POST", "php/signup.php", true);

  xhr.addEventListener("readystatechange", () => {
    if (xhr.readyState == 4 && xhr.status == 200) {
      console.log(xhr.responseText);
    }
  });
  // send formData by using ajax to php
  let formData = new formData(form); // creating new formData Object
  xhr.send(formData);
});
