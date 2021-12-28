function showTime() {
    var date = new Date().toLocaleString("en-US", {timeZone: "Africa/Cairo"})
    document.getElementById('localTime').innerHTML = date;
    console.log(date);

    setTimeout(showTime, 1000);
}