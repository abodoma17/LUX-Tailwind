var input = 1;
const inputField = document.querySelector('#phoneNum');
const button = document.querySelector('#checkoutButton');

inputField.addEventListener('keydown', () => {
    var input = document.querySelector('#phoneNum').value+1;
    if(input.length < 11 || input.length > 11)
    {
        button.disabled = true;
        console.log(input.length);
        document.querySelector('#checkoutButton').classList.add('cursor-not-allowed');
    }
    else
    {
        document.querySelector('#checkoutButton').classList.remove('cursor-not-allowed');
        button.disabled = false;
        console.log(input.length);
    }
})