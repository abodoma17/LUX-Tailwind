const originalPrice = document.getElementById('price').innerHTML;

function convert()
{
    var Httpreq = new XMLHttpRequest(); // a new request
    Httpreq.open("GET",'https://cdn.jsdelivr.net/gh/fawazahmed0/currency-api@1/latest/currencies/egp/usd.json',false);
    Httpreq.send(null);
    var jsonC = Httpreq.responseText;
    jsonC = JSON.parse(jsonC);
    var exchangeRate = jsonC.usd;

    var price = document.getElementById('price'), currency=document.getElementById('currencySelect');
    console.log(price.innerHTML);
    console.log(currency.value);
    if(currency.value == "usd")
    {
        var usdPrice = price.innerHTML*exchangeRate;
        price.innerHTML = usdPrice.toPrecision(3);
    }
    else if(currency.value == "egp")
    {
        price.innerHTML = originalPrice;
    }
}