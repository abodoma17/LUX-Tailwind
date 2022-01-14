const image1 = document.getElementById('productImg1');
const image2 = document.getElementById('productImg2');

function changePic(){
    if(image1.classList.contains('hidden') && !(image2.classList.contains('hidden')))
    {
        image1.classList.remove('hidden');
        image2.classList.add('hidden');
    }
    else
    {
        image1.classList.add('hidden');
        image2.classList.remove('hidden');
    }
}
