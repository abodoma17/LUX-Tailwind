<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lux Bazzar</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body style="background-image: url('./Shared/Images/tempBG.jpg');" class="text-white md:bg-cover">

    <div class="">
        <div>
            <nav class="flex justify-between w-full bg-black">
                <div class="flex md:ml-10 md:m-0 m-3 space-x-3">
                    <img src="./Shared/Images/menu.png" alt="" class="md:hidden h-8 w-auto cursor-pointer" id="menuButton">
                    <img src="./Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer md:block hidden">
                </div>

                
                <div class="">
                    <img src="./Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer m-3 md:hidden">
                    <ul class="flex md:space-x-10 md:text-2xl md:mt-5 space-x-3 text-2xl font-serif mt-4">
                        
                        <li class="text-yellow-300  hidden md:block"><a href="">Home</a></li>
                        <li class="hover:text-yellow-300 hidden md:block"><a href="./Pages/Products/View/shop.php">Shop</a></li>
                        <li class="hover:text-yellow-300 hidden md:block"><a href="./Pages/General/View/aboutUs.php">About</a></li>
                    </ul>
                </div>

                <div class="flex md:mr-10 m-3 space-x-5">
                    <a href="./Pages/Users/View/shoppingCart.php"><img src="./Shared/Images/shopping-cart-gold.png" alt="" class="md:h-11 md:w-full h-9 w-auto"></a>
                </div>
            </nav>
        </div>
        
        <div class="md:hidden hidden fixed bg-black w-full font-serif transition duration-300 ease-in-out" id="phoSideBar">
            <div class="space-y-5 text-2xl">
                <ul class="">
                    <div class="hover:bg-gray-900">
                        <li class="text-yellow-300  mx-3"><a href=""><img src="./Shared/Images/pyramid.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Home</a></li>
                    </div>
                    <div class="hover:bg-gray-900">   
                        <li class="hover:text-yellow-300  mx-3"><a href="./Pages/Products/View/shop.php"><img src="./Shared/Images/shopIcon.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Shop</a></li>
                    </div>
                    <div class="hover:bg-gray-900">
                        <li class="hover:text-yellow-300  mx-3"><a href="./Pages/General/View/aboutUs.php"><img src="./Shared/Images/about.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> About</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>

    <main class="flex h-screen justify-center items-center">
        <div class="text-center">
            <h1 style="-webkit-text-stroke: 1.25px black;" class="md:text-8xl text-5xl font-serif">Welcome to LUX</h1>
            <h2 style="-webkit-text-stroke: 1px black;" class="md:text-6xl text-3xl font-serif font-bold">Every gift tells a story</h2>
            <a class="" href="./Pages/Products/View/shop.php"><button class="md:px-10 md:py-4 px-6 py-3 bg-black rounded-3xl border-2 border-gray-900 bg-opacity-95 stroke hover:bg-opacity-80 transition ease-out uppercase font-bold text-">Explore</button></a>

        </div>
    </main>

    <footer class="sticky bottom-0 w-full">
        <div class="">
            <nav class="flex justify-between w-full bg-black p-1">
                <div class="flex md:ml-10 md:m-0">
                    <img src="./Shared/Images/logo.png" alt="" class="md:h-8 md:w-auto h-5 w-auto cursor-pointer">
                </div>

                <div>
                    <p class="text-gray-400 md:text-base text-sm">&copy; LUX 2021.</p>
                </div>

                <div class="flex md:mr-10 space-x-1">
                    <a href="https://www.instagram.com/"><img src="./Shared/Images/Instagram.png" alt="" class="md:h-7 md:w-auto h-5 w-auto"></a>
                    <a href="https://www.facebook.com/"><img src="./Shared/Images/Facebook.png" alt="" class="md:h-7 md:w-auto h-5 w-auto"></a>
                </div>
            </nav>
        </div>
    </footer>
    
    <script src="./index.js"></script>
</body>
</html>