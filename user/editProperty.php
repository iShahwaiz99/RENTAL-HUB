<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="">
    <!-- Css -->
    <link rel="stylesheet" href="../dist/styles.css">
    <link rel="stylesheet" href="../dist/all.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
    <title>Add Property | Rental Hub User</title>

    <style>
        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
        
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

</head>

<body>
    <!--Container -->
    <div class="mx-auto bg-grey-400">
        <!--Screen-->
        <div class="min-h-screen flex flex-col">
            <!--Header Section Starts Here-->
            <?php include "nav.php"; ?>
            <!--/Header-->

            <div class="flex flex-1">
                <!--Sidebar-->
                <?php include "sidebar.php"; ?>
                <!--/Sidebar-->
                <!--Main-->
                <main class="bg-white-300 flex-1 p-3 overflow-hidden">

                    <div class="flex flex-col">
                        <!--Grid Form-->

                        <div class="flex flex-1  flex-col md:flex-row lg:flex-row mx-2">
                            <div class="mb-2 border-solid border-gray-300 rounded border shadow-sm w-full">
                                <div class="flex justify-start bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    <p class="pt-2">Edit Property</p>
                                </div>
                                <!-- Success Alert -->
                                <?php if (isset($_GET['pass'])) { ?>
                                    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">Success!</b> The property update successfully.
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
    <span>×</span>

  </button>
</div>
                                 <?php } ?>
                                <!-- End -->
                                <!-- ERR Alert -->
                                <?php if (isset($_GET['err'])) { ?>
                                    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-red-500">
  <span class="text-xl inline-block mr-5 align-middle">
    <i class="fas fa-bell"></i>
  </span>
  <span class="inline-block align-middle mr-8">
    <b class="capitalize">Update Fail!</b> Total must be eqaul or greater than other value.
  </span>
  <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
    <span>×</span>

  </button>
</div>
                                     <?php } ?>
                                <!-- End -->
                                <?php if (isset($_GET['editid'])) {
                                    $id = $_GET['editid'];
                                    $con = mysqli_connect('localhost', 'root', '', 'renthub');
                                    $q = "select * from property where pid = '$id'";
                                    $result = mysqli_query($con, $q);
                                    $res = $result->fetch_assoc();
                                    if ($result->num_rows > 0) { if ($res['pCat'] == "House") {
                                        
                                        ?>
                                        <!-- Home -->
                                        <div id="home" class="p-3">
                                            <form class="w-full" action="uptp.php?cat=House&&uid=<?php echo $id; ?>" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                            Property Title
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" value="<?php echo $res['pTitle']; ?>" type="text" placeholder="Title" required>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Area
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" value="<?php echo $res['pTArea']; ?>" type="text" placeholder="Area" required>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                            Total Rooms
                                                        </label>
                                                        <input id="tr" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="troom" value="<?php echo $res['pTRoom']; ?>" type="number" required placeholder="Total Rooms">
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Drawing Room
                                                        </label>
                                                        <input id="dr" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="droom" value="<?php echo $res['pDRoom']; ?>" type="number" required placeholder="Drawing Room">
                                                    </div>

                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Dinning
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="dinning" value="<?php echo $res['pDinning']; ?>" type="number" required placeholder="Dinning">
                                                    </div>

                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Kitchen
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="kitchen" value="<?php echo $res['pKitchen']; ?>" type="number" required placeholder="Kitchen">
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                            Total Bathroom
                                                        </label>
                                                        <input id="tb" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="tbath" type="number" value="<?php echo $res['pTbath']; ?>" placeholder="Total Bathroom" required>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Attach Bathroom
                                                        </label>
                                                        <input id="ab" class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="abath" type="number" value="<?php echo $res['pABath']; ?>" placeholder="Attach Bathroom" required>
                                                    </div>

                                                </div>
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full px-3">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                            Location
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" value="<?php echo $res['pLocation']; ?>" placeholder="Address" required>
                                                    </div>
                                                </div>
                                                <div id="home1" class="flex flex-wrap -mx-3 mb-2">
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                            City
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" value="<?php echo $res['pCity']; ?>" type="text" placeholder="Islamabad" required>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                            State
                                                        </label>
                                                        <div class="relative">
                                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state" value="<?php echo $res['pState']; ?>" type="text" placeholder="Islamabad" disabled>
                                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-zip">
                                                            Rent
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="rent" value="<?php echo $res['pRent']; ?>" type="number" placeholder="45056" required>
                                                    </div>

                                                </div>
                                                <div class="flex flex-row-reverse w-full m-2">
                                                    <button type="submit" class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                        Submit
                                                    </button> </div>
                                            </form>
                                        </div>
                                        <?php    } else if ($res['pCat'] == "Shop") { ?>
                                        <!-- Shop-->
                                        <div id="shop" class="p-3">
                                            <form class="w-full" action="uptp.php?cat=Shop&&uid=<?php echo $id; ?>" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                            Property Title
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" value="<?php echo $res['pTitle']; ?>" type="text" placeholder="Title" required>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Area
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" value="<?php echo $res['pTArea']; ?>" type="text" placeholder="Area" required>
                                                    </div>
                                                </div>
                                                <div class="w-full px-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                            Location
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" value="<?php echo $res['pLocation']; ?>" placeholder="Address" required>
                                                    </div>
                                                </div>
                                                <div id="home1" class="flex flex-wrap mb-2">
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                            City
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" value="<?php echo $res['pCity']; ?>" type="text" placeholder="Islamabad" required>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                            State
                                                        </label>
                                                        <div class="relative">
                                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state" value="<?php echo $res['pState']; ?>" type="text" placeholder="Islamabad" disabled>
                                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-zip">
                                                            Rent
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="rent" value="<?php echo $res['pRent']; ?>" type="number" placeholder="45056" required>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row-reverse w-full m-2">
                                                    <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                        Submit
                                                    </button> </div>
                                            </form>
                                        </div>
                                        <?php     } else { ?>
                                        <!-- plot -->
                                        <div id="plot" class="p-3">
                                            <form class="w-full" action="uptp.php?cat=Plot&&uid=<?php echo $id; ?>" onsubmit="return validate()" method="post" enctype="multipart/form-data">
                                                <div class="flex flex-wrap -mx-3 mb-6">
                                                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                            Property Title
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" value="<?php echo $res['pTitle']; ?>" type="text" placeholder="Title" required>
                                                    </div>
                                                    <div class="w-full md:w-1/2 px-3">
                                                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                            Area
                                                        </label>
                                                        <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" value="<?php echo $res['pTArea']; ?>" type="text" placeholder="Area" required>
                                                    </div>
                                                </div>
                                                <div class="w-full px-1">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                            Location
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" value="<?php echo $res['pLocation']; ?>" placeholder="Address" required>
                                                    </div>
                                                </div>
                                                <div id="home1" class="flex flex-wrap mb-2">
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                            City
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" value="<?php echo $res['pCity']; ?>" type="text" placeholder="Islamabad" required>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                            State
                                                        </label>
                                                        <div class="relative">
                                                            <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state" value="<?php echo $res['pState']; ?>" type="text" placeholder="Islamabad" disabled>
                                                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-zip">
                                                            Rent
                                                        </label>
                                                        <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="rent" value="<?php echo $res['pRent']; ?>" type="number" placeholder="45056" required>
                                                    </div>

                                                </div>
                                                <div class="flex flex-row-reverse w-full m-2">
                                                    <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                        Submit
                                                    </button> </div>
                                            </form>
                                        </div>
                                        <?php    } } else { ?>
                                        <div class=" inline-block w-full">
                                            <h3 class="text-white uppercase text-lg">user not found go back to home page: <a href="index.php" class="ml-2 px-8 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-400">Home page</a> </h3>
                                        </div>
                                        <?php     } }else { ?>
                                        <div class=" inline-block w-full">
                                            <h3 class="text-white uppercase text-lg">user not found go back to home page: <a href="index.php" class="ml-2 px-8 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-400">Home page</a> </h3>
                                        </div><?php } ?>
                                       
                                   
                            </div>
                        </div>
                        <!--/Grid Form-->

                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <?php include "../admin/footer.php"; ?>
            <!--/footer-->

        </div>

    </div>
    <script src="../main.js"></script> 
</body>

</html>