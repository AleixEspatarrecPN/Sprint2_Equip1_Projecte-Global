let id = (id) => document.getElementById(id)

let username = id('username')
let email = id('email')
let phone = id('phone')

let lastUsername, lastEmail, lastPhone

let usernameEditButton = id('edit-username')
let emailEditButton = id('edit-email')
let phoneEditButton = id('edit-phone')

let usernameCancelButton = id('cancel-username')
let emailCancelButton = id('cancel-email')
let phoneCancelButton = id('cancel-phone')

usernameEditButton.addEventListener('click', () => {
    lastUsername = username.value
    username.disabled = false
    usernameEditButton.style.display = 'none'
    usernameCancelButton.style.display = 'inline'
})

emailEditButton.addEventListener('click', () => {
    lastEmail = email.value
    email.disabled = false
    emailEditButton.style.display = 'none'
    emailCancelButton.style.display = 'inline'
})

phoneEditButton.addEventListener('click', () => {
    lastPhone = phone.value
    phone.disabled = false
    phoneEditButton.style.display = 'none'
    phoneCancelButton.style.display = 'inline'
})

usernameCancelButton.addEventListener('click', () => {
    console.log(lastUsername)
    username.value = lastUsername
    username.disabled = true
    usernameCancelButton.style.display = 'none'
    usernameEditButton.style.display = 'inline'
})

emailCancelButton.addEventListener('click', () => {
    email.value = lastEmail
    email.disabled = true
    emailCancelButton.style.display = 'none'
    emailEditButton.style.display = 'inline'
})

phoneCancelButton.addEventListener('click', () => {
    phone.value = lastPhone
    phone.disabled = true
    phoneCancelButton.style.display = 'none'
    phoneEditButton.style.display = 'inline'
})

