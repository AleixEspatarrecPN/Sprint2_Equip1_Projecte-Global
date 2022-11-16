const submit = document.getElementById("submit");

submit.addEventListener("click", validate);

function validate(e) {
  e.preventDefault();

  const firstNameField = document.getElementById("recipient-actual-password");
  let valid = true;

  if (!firstNameField.value) {
    const passError = document.getElementById("passError");
    passError.classList.add("visible");
    firstNameField.classList.add("invalid");
    passError.setAttribute("aria-hidden", false);
    passError.setAttribute("aria-invalid", true);
  }
  return valid;
}