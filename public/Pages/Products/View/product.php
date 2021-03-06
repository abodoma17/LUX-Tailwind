<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../../../styles.css">
</head>
<body class="text-white bg-primary">
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
                            <li class="hover:text-yellow-300 hidden md:block"><a href="../../General/View/aboutUs.php">About</a></li>
                        </ul>
                    </div>
    
                    <div class="flex md:mr-10 m-3 space-x-5">
                        <a href="../../../Pages/Users/View/shoppingCart.php"><img src="../../../Shared/Images/shopping-cart-gold.png" alt="" class="md:h-11 md:w-full h-9 w-auto"></a>
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
                            <li class="text-yellow-300  mx-3"><a href="../../Products/shop.php"><img src="../../../Shared/Images/shopIcon.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> Shop</a></li>
                        </div>
                        <div class="hover:bg-gray-900">
                            <li class="hover:text-yellow-300  mx-3"><a href="../../General/View/aboutUs.php"><img src="../../../Shared/Images/about.png" alt="" class="h-6 w-auto inline-block mb-2 mr-1"> About</a></li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        $id = $_GET['id'];
        
        $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
                    $db = mysqli_select_db($con,"luxdb");

                    $viewProduct = "SELECT * FROM products
                     WHERE id = $id";
                    $result = mysqli_query($con, $viewProduct);

                    while($row = mysqli_fetch_array($result))
                    {
                        echo " 
                        <div class='md:grid md:grid-cols-3'>
                            <div class='w-11/12 mx-auto my-10'>
                                <img class='' id='productImg1' src='".$row["image1"]."' onmouseover='changePic();' onmouseout='changePic();'>
                                <img class='hidden' id='productImg2' src='".$row["image2"]."' onmouseover='changePic();' onmouseout='changePic();'>
                            </div>

                            <div class='md:col-span-2 my-12 ml-5'>
                                <h1 class='text-5xl mb-1 font-serif'>" . $row["name"] . "</h1>
                                <h2 class='text-2xl font-mono' id=''>" . $row["description"] . "</h2>
                                <div class='flex'>
                                    <p class='text-xl text-yellow-100 font-nunito mr-2' id='price'>" . $row["price"] . "</p>
                                    <select class='text-white bg-primary border-2 border-gray-500' id='currencySelect' onchange='convert();'>
                                        <option value='egp'>EGP</option>
                                        <option value='usd'>US$</option>
                                    </select>
                                </div>


                                <form action='cartAdd.php?' method='GET'>

                                <button type='submit' class='my-4 font-' style='background-color: #a48111;
                                color: rgb(255, 255, 255);
                                text-transform: uppercase;
                                padding: 20px;
                                border-radius: 10px;
                                border: none;
                                border-bottom: 6px solid #0002 ;
                                font-weight: 700;'>Add to cart</button>

                                <select class='text-white bg-primary border-2 border-gray-500 p-1 ml-2' name='q'>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                </select>

                                <input class='hidden' type='text' id='id' name='id' value='$id'>

                                </form>
                                

                                <h5 class='text-l font-semibold mb-3 font-nunito'>" . $row["bg"] . "</h5>
                                <h3 class='text-2xl border-b-2 inline font-serif' id=''>Dimensions:</h3>

                                <h4 class='text-l mt-5 font-bold'>Weight: " . $row["weight"] . "gm</h4>
                                <h4 class='text-l font-bold'>Height: " . $row["height"] . "cm</h4>
                                <h4 class='text-l font-bold'>Width: " . $row["width"] . "cm</h4>
                            </div>
                        </div>
                        ";
                    }

        ?>

        
        
    

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
    <script src="./hoverPic.js"></script>
    <script src="./priceConverter.js"></script>

</body>
</html>