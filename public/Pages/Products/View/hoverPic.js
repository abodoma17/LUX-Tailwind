const pic = document.getElementById('productImg');
const originalSrc = document.getElementById('productImg').src;

function changePic(){
    pic.src = "../../../Shared/Images/statue1.jpg";
}
function restorePic(){
    pic.src = originalSrc;
}
