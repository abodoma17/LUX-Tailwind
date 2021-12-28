const originalPrice = document.getElementById('price').innerHTML;

function convert()
{
    var price = document.getElementById('price'), currency=document.getElementById('currencySelect');
    console.log(price.innerHTML);
    console.log(currency.value);
    if(currency.value == "usd")
    {
        price.innerHTML = price.innerHTML/16;
    }
    else if(currency.value == "egp")
    {
        price.innerHTML = originalPrice;
    }
}