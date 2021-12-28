var input = 1;
const inputField = document.getElementById('phoneNum');
const button = document.getElementById('checkoutButton');

inputField.addEventListener('focusout', () => {
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