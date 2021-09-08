const passwordField = document.querySelector(
  ".form form .field input[type='password']"
);

toggleButton = document.querySelector(".form .field i");

toggleButton.addEventListener("click", () => {
  if (passwordField.type == "password") {
    // show the password
    passwordField.type = "text";
    toggleButton.classList.add("active");
  } else {
    // hide password
    passwordField.type = "password";
    toggleButton.classList.remove("active");
  }
});
