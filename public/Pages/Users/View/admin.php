<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../../styles.css">
</head>
<body class="text-white bg-primary">
    <div class="">
        <div>
            <nav class="flex justify-between w-full bg-black">
                <div class="flex md:ml-10 md:m-0 m-3 space-x-3">
                    <img src="../../../Shared/Images/menu.png" alt="" class="md:hidden h-8 w-auto cursor-pointer" id="menuButton">
                    <img src="../../../Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer md:block hidden">
                </div>

                
                <div class="">
                    <img src="../../../Shared/Images/logo.png" alt="" class="md:h-16 md:w-full h-9 w-auto cursor-pointer m-3 md:hidden">
                    <ul class="flex md:space-x-10 md:text-2xl md:mt-5 space-x-3 text-2xl font-serif mt-4">
                        
                        <li class="hover:text-yellow-300  hidden md:block"><a href="../../../index.php">Home</a></li>
                        <li class="hover:text-yellow-300 hidden md:block"><a href="../../../Pages/Products/View/shop.php">Shop</a></li>
                        <li class="hover:text-yellow-300 hidden md:block"><a href="../../../Pages/General/View/aboutUs.php">About</a></li>
                    </ul>
                </div>

                <div class="flex md:mr-10 m-3 space-x-5">
                    <a href="./shoppingCart.php"><img src="../../../Shared/Images/shopping-cart-gold.png" alt="" class="md:h-11 md:w-full h-9 w-auto"></a>
                </div>
            </nav>
        </div>
        
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
                        <li class="hover:text-yellow-300  mx-3"><a href="../../General/View/aboutUs.php"><img src="../../../Shared/Images/about.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> About</a></li>
                    </div>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="md:grid md:grid-cols-2">
        <div class="md:flex h-screen justify-center items-center hidden">
            <img src="../../../Shared/Images/loginPic.svg" alt="" class="w-10/12">
        </div>
        
        <div class="flex h-screen justify-center items-center md:my-0 mx-16">
            <div class="text-center bg-white text-black rounded-lg"> 

                <form class="mx-10" method="post" action="loginHandler.php">
                    <img src="../../../Shared/Images/logo.png" alt="" class="w-1/3 mx-auto  mt-5">
                    <h1 class="text-4xl mt-5 mb-8 inline-block font-bold">LOGIN</h1>

                    <input type="text" name ="username"class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Username">
                    <input type="password" name="password" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-1 mb-1" placeholder="Password">
                    <div class="flex items=center mb-5 mt-3">
                        <input type="checkbox" class="float-left ml-2 ">
                        <p class="float-left ml-2 text-sm font-semibold text-gray-600">Remember me</p>
                    </div>
                    <a href="./adminFunc.php"><input type="submit" value="Login" class="bg-purple-700 text-white w-3/4 py-2 rounded-sm my-4 "></input></a>

                    <a href="" class="font-semibold text-purple-900 mb-12 block">Forgot password?</a>
                    
                </form>
            </div>
          </div>
    </div>

    <footer class="w-full bg-black mt-10 md:mt-10">
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
    <script src="../../../index.js"></script>
</body>
</html>