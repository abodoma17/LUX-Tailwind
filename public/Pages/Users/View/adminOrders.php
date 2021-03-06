<!DOCTYPE html>
<?php
    session_start();
    if(! isset($_SESSION["loggedAdmin"])){

        header('Location: loginHandler.php');

    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
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
    
    <div class="flex w-screen justify-center mt-2">
        <h1 class="text-center md:text-6xl border-b-2 py-4 inline-block font-serif my-6 text-4xl">Orders</h1>
    </div>

    <div class="flex w-screen justify-center mt-4">
        <div class="">
            <table class="border-separate border border-gray-500 table-auto">
                <thead>
                    <tr class="uppercase text-xl bg-gray-800">
                        <th class="border border-gray-600 p-4">oID</th>
                        <th class="border border-gray-600  p-4">First Name</th>
                        <th class="border border-gray-600  p-4">Last Name</th>
                        <th class="border border-gray-600  p-4">Total</th>
                        <th class="border border-gray-600  p-4">City</th>
                        <th class="border border-gray-600  p-4">Address</th>
                        <th class="border border-gray-600  p-4">Email</th>
                        <th class="border border-gray-600  p-4">Phone Number</th>
                        <th class="border border-gray-600  p-4">Items</th>
                    </tr>
                </thead>
                <tbody class="text-lg bg-gray-700 text-center">
                    <?php
                        $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
                        $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");;

                        $viewOrders = "SELECT * FROM orders ORDER BY oID DESC";
                        $result = mysqli_query($con,$viewOrders);

                        if(!$result){
                            die("ERROR: " . mysqli_errno($con));
                        }

                        while($row = mysqli_fetch_array($result)){
                            echo "
                            <tr>
                                <td>" . $row["oID"] . "</td>
                                <td>" . $row["f_name"] . "</td>
                                <td>" . $row["l_name"] . "</td>
                                <td>" . $row["total"] . "</td>
                                <td>" . $row["city"] . "</td>
                                <td>" . $row["address"] . "</td>
                                <td>" . $row["email"] . "</td>
                                <td>" . $row["phoneNo"] . "</td>
                                <td>" . $row["items"] . "</td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
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
    
    <script src="../../../index.js"></script>
</body>
</html>