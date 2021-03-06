<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>
    <body class="text-white bg-primary" onload="showTime();">
        <div>
            <div>
                <nav class="flex justify-between w-full bg-black">
                    <div class="flex md:ml-10 md:m-0 m-3 space-x-3">
                        <img src="../../../Shared/Images/menu.png" alt="" class="md:hidden h-8 w-auto cursor-pointer" id="menuButton">
                        <img src="../../../Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer md:block hidden">
                    </div>
    
                    
                    <div class="">
                        <img src="../../../Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer m-3 md:hidden">
                        <ul class="flex md:space-x-10 md:text-2xl md:mt-5 space-x-3 text-2xl font-serif mt-4">
                            
                            <li class="hover:text-yellow-300  hidden md:block "><a href="../../../index.php">Home</a></li>
                            <li class="hover:text-yellow-300 hidden md:block text-white"><a href="../../../Pages/Products/View/shop.php">Shop</a></li>
                            <li class="text-yellow-300 hidden md:block"><a href="./aboutUs.php">About</a></li>
                        </ul>
                    </div>
    
                    <div class="flex md:mr-10 m-3 space-x-5">
                        <a href="../../Users/View/shoppingCart.php"><img src="../../../Shared/Images/shopping-cart-gold.png" alt="" class="md:h-11 md:w-full h-9 w-auto"></a>
                    </div>
                </nav>
            </div>
            
            <!--MOBILE SIDEBAR-->
            <div class="md:hidden hidden fixed bg-black w-full font-serif transition duration-300 ease-in-out" id="phoSideBar">
                <div class="space-y-5 text-2xl">
                    <ul class="">
                        <div class="hover:bg-gray-900">
                            <li class="hover:text-yellow-300  mx-3"><a href="../../../index.php"><img src="../../../Shared/Images/pyramid.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Home</a></li>
                        </div>
                        <div class="hover:bg-gray-900">   
                            <li class="hover:text-yellow-300  mx-3"><a href="../../Products/View/shop.php"><img src="../../../Shared/Images/shopIcon.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Shop</a></li>
                        </div>
                        <div class="hover:bg-gray-900">
                            <li class="text-yellow-300  mx-3"><a href="../../General/View/aboutUs.php"><img src="../../../Shared/Images/about.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> About</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <div class="">
            <div class="mt-10 mb-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d685.3094808028433!2d31.235603154607453!3d30.044225187361288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c623362e7d%3A0xede7c66693c5f18e!2sTahrir%20Square%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1636828434360!5m2!1sen!2seg" class="md:w-2/3 md:h-96 m-auto w-11/12 h-72 border-2 border-black focus:no-underline" ></iframe>
            </div>

            
            <div id="infoContainer" class="text-center">
                <h1 class="text-center md:text-6xl border-b-2 py-2 inline-block font-serif my-6 text-4xl ">About Us</h1>
                <div class="text-center md:grid md:grid-cols-3">
                    <div class="mb-12">
                        <h2 class="mt-5 text-4xl mb-3">Address</h2>
                        <h3 class="text-3xl text-yellow-300">5 Tahrir square, Cairo</h3>
                    </div>
                    <div class="md:border-l-2 mb-12">
                        <h2 class="text-4xl mb-3">Phone Numbers</h2>
                        <a href="tel:+201023232269" class="block text-3xl text-yellow-300">+201023232269</a>
                        <a href="tel:+201062830239" class="text-3xl text-yellow-300">+201062830239</a>
                    </div>
                    <div class="md:border-l-2 mb-12">
                        <h2 class="text-4xl mb-3">Socials</h2>
                        <div class="mx-auto my-5">
                            <a href="https://www.facebook.com/"><img src="../../../Shared/Images/Facebook.png" alt="" class="w-14 inline-block"></a>
                            <a href="https://www.instagram.com/"><img src="../../../Shared/Images/Instagram.png" alt="" class="w-14 inline-block"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-center md:text-6xl border-b-2 py-2 inline-block font-serif my-6 text-4xl ">Local Time</h1>
                <h1 class="text-center md:text-4xl font-mono text-4xl text-blue-500" id="localTime"></h1>
            </div> 
        </div>
        

        <footer class="w-full bg-black mt-10 md:mt-32">
            <div class="md:grid md:grid-cols-3 grid grid-cols-2">
                <div class="md:p-20 p-5">
                    <ul class=" border-r-2 font-sans md:text-base text-xs">
                        <a href=""><li class="my-2">About Us</li></a>
                        <a href=""><li class="my-2">Return & Refund Policy</li></a>
                        <a href=""><li class="my-2">Terms of Service</li></a>
                        <a href=""><li class="my-2">Shipping</li></a>
                    </ul>
                </div>
                <div class="items-center h-full">
                    <img src="../../../Shared/Images/logo.png" alt="" class="md:h-1/2 md:w-auto mx-auto md:mt-20 mt-8 h-1/2 w-auto">
                </div>
            </div>
        </footer>

        <script src="./localDate.js"></script>
        <script src="../../../index.js"></script>
    </body>
</html>