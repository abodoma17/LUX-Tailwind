const { contentMatchCache } = require("tailwindcss/lib/jit/lib/sharedState");

var img = document.getElementById("productImg");

function nextImg(){

    document.getElementById("productImg").src='../../../Shared/Images/accessories.jpg';

}

function prevImg(){


    document.getElementById("productImg").src='../../../Shared/Images/Facebook.png';

}
window.addEventListener("load",function() {

    var imgsrc =  document.getElementById("productImg").src,

    img = new Image();

    //load image + zoom
    img.src=imgsrc;

    img.onload = function (){

        var imgWidth = img.naturalWidth,
            imgHeight = img.naturalHeight,
            ratio = imgHeight/imgWidth,
            percentage = ratio*100 + "%";

        //Zoom on mouse move
        container.onmusemove = function (e){

            

        };

    };





});
