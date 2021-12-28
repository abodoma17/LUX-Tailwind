var input = 1;
const phoneInputField = document.getElementById('phoneNum');
const emailInputField = document.getElementById('emailInput');
const firstNameInputField = document.getElementById('firstNameInput');
const lastNameInputField = document.getElementById('lastNameInput');
const button = document.getElementById('checkoutButton');

phoneInputField.addEventListener('focusout', () => {
    var input = document.getElementById('phoneNum').value.length;
    console.log(input)
    if(input < 11 || input > 11)
    {
        button.disabled = true;
        console.log(input.length);
        document.getElementById('checkoutButton').classList.add('cursor-not-allowed');
        document.getElementById('phoneNum').classList.add('border-2');
        document.getElementById('phoneNum').classList.add('border-red-600');
        document.getElementById("phoneError").classList.remove('hidden');
    }
    else
    {
        document.getElementById('checkoutButton').classList.remove('cursor-not-allowed');
        document.getElementById('phoneNum').classList.remove('border-2');
        document.querySelector('#phoneNum').classList.remove('border-red-600');
        document.getElementById("phoneError").classList.add('hidden');
        button.disabled = false;
        console.log(input.length);
    }
})

emailInputField.addEventListener('focusout', () => {
    var email = document.getElementById('emailInput').value;
    console.log(email)
    if(!(email.includes("@")))
    {
        button.disabled = true;
        console.log("doesnt include @")
        document.getElementById('checkoutButton').classList.add('cursor-not-allowed');
        document.getElementById('emailInput').classList.add('border-2');
        document.getElementById('emailInput').classList.add('border-red-600');
        document.getElementById("emailError").classList.remove('hidden');
    }
    else
    {
        button.disabled = false;
        console.log("includes @")
        document.getElementById('checkoutButton').classList.remove('cursor-not-allowed');
        document.getElementById('emailInput').classList.remove('border-2');
        document.getElementById('emailInput').classList.remove('border-red-600');
        document.getElementById("emailError").classList.add('hidden');
    }
})

firstNameInputField.addEventListener('focusout', () => {
    var firstName = document.getElementById('firstNameInput').value;
    console.log(firstName)
    if(stringContainsNumber(firstName))
    {
        button.disabled = true;
        console.log("includes num")
        document.getElementById('checkoutButton').classList.add('cursor-not-allowed');
        document.getElementById('firstNameInput').classList.add('border-2');
        document.getElementById('firstNameInput').classList.add('border-red-600');
        document.getElementById("firstNameError").classList.remove('hidden');
    }
    else
    {
        button.disabled = false;
        console.log("doesnt Include num")
        document.getElementById('checkoutButton').classList.remove('cursor-not-allowed');
        document.getElementById('firstNameInput').classList.remove('border-2');
        document.getElementById('firstNameInput').classList.remove('border-red-600');
        document.getElementById("firstNameError").classList.add('hidden');
    }
})

lastNameInputField.addEventListener('focusout', () => {
    var firstName = document.getElementById('lastNameInput').value;
    console.log(firstName)
    if(stringContainsNumber(firstName))
    {
        button.disabled = true;
        console.log("includes num")
        document.getElementById('checkoutButton').classList.add('cursor-not-allowed');
        document.getElementById('lastNameInput').classList.add('border-2');
        document.getElementById('lastNameInput').classList.add('border-red-600');
        document.getElementById("lastNameError").classList.remove('hidden');
    }
    else
    {
        button.disabled = false;
        console.log("doesnt Include num")
        document.getElementById('checkoutButton').classList.remove('cursor-not-allowed');
        document.getElementById('lastNameInput').classList.remove('border-2');
        document.getElementById('lastNameInput').classList.remove('border-red-600');
        document.getElementById("lastNameError").classList.add('hidden');
    }
})

function stringContainsNumber(name){
    let nameC = String(name);
    for( let i = 0; i < nameC.length; i++){
        if(!isNaN(nameC.charAt(i)) && !(nameC.charAt(i) === " ") ){
          return true;
        }
    }
    return false;
  }