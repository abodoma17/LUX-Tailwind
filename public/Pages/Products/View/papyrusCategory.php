<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Papyrus</title>
    <link rel="stylesheet" href="../../../styles.css">
</head>
<body class="bg-primary text-white">
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
                    <li class="text-yellow-300 hidden md:block"><a href="./shop.php">Shop</a></li>
                    <li class="hover:text-yellow-300 hidden md:block"><a href="../../General/View/aboutUs.php">About</a></li>
                </ul>
            </div>

            <div class="flex md:mr-10 m-3 space-x-5">
                <a href="../../../Pages/Users/View/shoppingCart.php"><img src="../../../Shared/Images/shopping-cart-gold.png" alt="" class="md:h-11 md:w-full h-9 w-auto"></a>
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
                    <li class="text-yellow-300  mx-3"><a href="./shop.php"><img src="../../../Shared/Images/shopIcon.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Shop</a></li>
                </div>
                <div class="hover:bg-gray-900">
                    <li class="hover:text-yellow-300  mx-3"><a href="../../General/View/aboutUs.php"><img src="../../../Shared/Images/about.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> About</a></li>
                </div>
            </ul>
        </div>
    </div>
</div>
    
    <main>
        <div class=" lg:grid lg:grid-cols-4">
            <div class="">
            </div>
            <!--CARDS GO HERE-->
            <div class=" text-center lg:col-span-2">
                <h1 class="text-center md:text-6xl border-b-2 py-4 inline-block font-serif my-6 text-4xl">Papyrus</h1>
                <div class="md:grid md:grid-cols-3 md:gap-10 grid grid-cols-2 gap-5 text-center md:mx-16 mx-5">
                <?php
                    $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
                    $db = mysqli_select_db($con,"luxdb");

                    $viewPapyrus = "SELECT * FROM products
                    WHERE cID=4
                     ORDER BY id DESC";
                    $result = mysqli_query($con, $viewPapyrus);

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "
                        <a href='product.php?id=".$row["id"]."'>
                            <div class='cursor-pointer bg-primary rounded-lg p-2 transform transition duration-300 ease-in-out hover:scale-110 hover:drop-shadow-cardhover' style='box-shadow: 0 4px 8px 0 rgba(0,0,0,0.75);'>
                            <img src='".$row["image1"]."' alt='' class='md:bg-cover pb-3'>
                            <span class='font-serif text-xl'>".$row["name"]."</span>
                            <span class='font-mono text-lg block'>".$row["price"]." EGP</span>
                            </div>
                        </a>
                        ";
                    }
                    ?>
                </div>
            </div>
            
        </div>
        
    </main>

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
    
    <script src="../../../index.js"></script>
</body>
</html>