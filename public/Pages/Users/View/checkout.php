<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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
                        <li class="hover:text-yellow-300 hidden md:block"><a href="../../Products/View/shop.php">Shop</a></li>
                        <li class="hover:text-yellow-300 hidden md:block"><a href="../../General/View/aboutUs.php">About</a></li>
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

        <div class="md:flex h-screen justify-end items-center md:my-0 mx-16 hidden">
            <div class="text-center bg-white text-black rounded-lg"> 
                <div class="mx-10">
                    <div class="">
                        <h1 class="text-4xl font-bold p-3 border-b-2 border-black mb-4 inline-block">Shopping Cart</h1>
                    </div>
                    <div class="flex flex-col gap-4">
                    <?php
                        session_start();
                        $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
                        $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");
                        $total=0;
                        $orderP = '';
                        if(!(empty($_SESSION['cart'])))
                        {
                            foreach($_SESSION['cart'] as $id => $quantity)
                            {
                                
                                $query = "SELECT * FROM products WHERE id=$id";
                                $result = mysqli_query($con,$query);
                                $row = mysqli_fetch_array($result);
                                $image = $row["image1"];
                                $name = $row["name"];
                                $price = $row["price"];
                                $price = intval($price)*intval($quantity);
                                $total += $price;
                                $orderP = $orderP . " ".$quantity."x $name";
                                echo(
                                    "
                                    <div class='border-t-2 border-gray-400 pt-4 flex items-center'>
                                            <div>
                                            <img src='$image' alt='' class='w-96 md:w-32 inline rounded-lg'>
                                            </div>

                                            <div class='md:w-96 w-screen'>
                                                <p class='text-2xl font-nunito'>".$quantity."x $name </p>
                                            </div>

                                            <div class='md:w-48 w-screen'>
                                                <p class='font-semibold text-xl'>$price EGP</p>
                                            </div>

                                            <form method='GET' action='cartDelete.php?' class=''>
                                                <input class='hidden' type='text' id='id' name='id' value='$id'>

                                                <div class='md:w-48 w-screen flex justify-center'>
                                                    <button type='submit'><img src='../../../Shared/Images/bin.png' alt='' class='w-9 md:w-8'></button>
                                                </div>
                                            </form>
                                    </div>
                                    
                                    "
                                );

                            }
                        }
                        
                        ?>
                    </div>

                    <div class="flex justify-end mt-10">
                        <div class="border-t-2 border-black font-bold">
                            <p>Total: <?php
                            echo($total);
                            ?> EGP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="flex h-screen justify-center items-center md:my-0 mx-16">
            <form method="GET" action="addOrder.php" class="text-center bg-white text-black rounded-lg max-w-md">
                <div class="mx-10">
                    <img src="../../../Shared/Images/logo.png" alt="" class="w-1/3 mx-auto  mt-5">
                    <h1 class="text-4xl mt-5 mb-8 inline-block font-bold">Checkout</h1>
                    <div>
                        <label for="" class="float-left text-red-600 hidden" id="firstNameError">Name can not contain numbers.*</label> 
                    </div>
                    <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="First Name" id="firstNameInput" name="fname">
                    <div>
                        <label for="" class="float-left text-red-600 hidden" id="lastNameError">Name can not contain numbers.*</label> 
                    </div>
                    <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Last Name" name="lname" id="lastNameInput">
                    <div class="">
                        <div class="float-left flex items-center">
                            <p class="font-nunito font-semibold text-lg">City</p>
                            <select name="city" id="checkoutField" required class="block bg-gray-300 rounded-md p-2 text-gray-700 my-2 ml-4">
                                <option value="Cairo">Cairo</option>
                                <option value="Giza">Giza</option>
                                <option value="Alexandria">Alexandria</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label for="" id="phoneError" class="float-left text-red-600 hidden">Phone Number should be 11 digits.*</label>
                        
                    </div>
                    
                    <input type="tel" name="phone" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 mt-2" placeholder="Phone Number" id="phoneNum">
                    <div>
                        <label for="" id="emailError" class="float-left text-red-600 hidden">Email should be valid.*</label>
                    </div>
                    <input type="email" name="email" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Email" id="emailInput"> 
                    <input type="text" name="address" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Address">
                    
                    <?php
                    echo("<input class='hidden' type='text' id='total' name='total' value='$total'>");
                    echo("<input class='hidden' type='text' id='orderP' name='orderP' value='$orderP'>");
                    ?>
                    
                    <button class="bg-yellow-600 text-white w-3/4 py-2 rounded-sm my-4" id="checkoutButton" type="submit">Checkout</button>
                </div>
            </form>
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
    
    <script src="./validation.js"></script>
    <script src="../../../index.js"></script>
</body>
</html>