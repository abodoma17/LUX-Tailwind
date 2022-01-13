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
    <title>Statues</title>
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


    <div class="flex w-screen justify-center mt-12">
        <div class="">
            <table class="border-separate border border-gray-500 table-auto">
                <thead>
                    <tr class="uppercase text-xl bg-gray-800">
                        <th class="border border-gray-600 p-4">pID</th>
                        <th class="border border-gray-600  p-4">name</th>
                        <th class="border border-gray-600  p-4">description</th>
                        <th class="border border-gray-600  p-4">price</th>
                        <th class="border border-gray-600  p-4">bg</th>
                        <th class="border border-gray-600  p-4">weight</th>
                        <th class="border border-gray-600  p-4">width</th>
                        <th class="border border-gray-600  p-4">height</th>
                        <th class="border border-gray-600  p-4">image1</th>
                        <th class="border border-gray-600  p-4">image2</th>
                    </tr>
                </thead>
                <tbody class="text-lg bg-gray-700 text-center">
                    <?php
                        $con = mysqli_connect("localhost","root","") or die ("Error: Couldn't connect to srever");
                        $db = mysqli_select_db($con,"luxdb") or die ("Error: Couldn't connect to Database");;

                        $viewStatues = "SELECT * FROM statues";
                        $result = mysqli_query($con,$viewStatues);

                        if(!$result){
                            die("ERROR: " . mysqli_errno($con));
                        }

                        while($row = mysqli_fetch_array($result)){
                            echo "
                            <tr>
                                <td>" . $row["sID"] . "</td>
                                <td>" . $row["name"] . "</td>
                                <td>" . $row["description"] . "</td>
                                <td>" . $row["price"] . "</td>
                                <td>" . $row["bg"] . "</td>
                                <td>" . $row["weight"] . "</td>
                                <td>" . $row["width"] . "</td>
                                <td>" . $row["height"] . "</td>
                                <td>" . $row["image1"] . "</td>
                                <td>" . $row["image2"] . "</td>
                            </tr>
                            ";
                        }
                    ?>
                </tbody>
            </table>
        </div>  
    </div>
        <div class="md:grid md:grid-cols-2 mt-10">

            <div>
                <div class="flex w-full justify-center items-center md:my-0 mx-16">
                <form method="POST" action="../Controller/addStatueHandler.php" class="text-center bg-white text-black rounded-lg max-w-md"> 
                    <div class="mx-10">
                        <img src="../../../Shared/Images/logo.png" alt="" class="w-1/3 mx-auto  mt-5">
                        <h1 class="text-4xl mt-5 mb-8 inline-block font-bold">Add Product</h1>
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Name" name="nameInput">                 
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 mt-2" placeholder="Description" name="descriptionInput">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Price" name="priceInput"> 
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Background Info" name="bgInput">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Weight" name="weightInput">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Width" name="widthInput">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Height" name="heightInput">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Image 1" name="image1input">
                        <input type="text" class="block bg-gray-300 rounded-md p-2 w-80 text-gray-700 my-2" placeholder="Image 2"name="image2">
                        
                        <button type="submit" class="bg-yellow-600 text-white w-3/4 py-2 rounded-sm my-4" id="addButton">Add</button>
                    </div>
                </form>
          </div>
            </div>



            <div class="md:border-l-2 md:border-white flex-col justify-center align-center text-center">
                <h1 class="text-center lg:text-4xl border-b-2 inline-block font-serif text-4xl">Delete Product</h1>
                <div class="flex w-full justify-center align-center">
                    <form method ="POST"
                    action="../Controller/deleteStatueHandler.php" class="block mt-5">
                        <div>
                            <input type="text" placeholder="ID" class="bg-gray-300 rounded-md p-2 w-32 text-gray-900 my-2 placeholder-gray-700" name="idDelete">
                            <button type="submit" class="p-2 bg-yellow-600 rounded-md text-white">Delete</button>
                        </div> 
                    </form>
                </div>
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