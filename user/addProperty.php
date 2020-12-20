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
                                    <p class="pt-2">Add Category</p>
                                    <div class="relative">
                                        <select id="sc" class="block ml-5 appearance-none bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state" onChange="showDiv(this)">
                                             <option value="h" id="h">Machine</option>
                                             <option id="s">Furniture</option>
                                        </select>
                                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <!-- Success Alert -->
                                <?php if (isset($_GET['pass'])) { ?>
                                    <div class="text-white px-6 py-4 border-0 rounded relative mb-4 bg-green-500">
                                        <span class="text-xl inline-block mr-5 align-middle">
                                            <i class="fas fa-bell"></i>
                                        </span>
                                        <span class="inline-block align-middle mr-8">
                                            <b class="capitalize">Success!</b> Items added successfully.
                                        </span>
                                        <button class="absolute bg-transparent text-2xl font-semibold leading-none right-0 top-0 mt-4 mr-6 outline-none focus:outline-none" onclick="closeAlert(event)">
                                            <span>×</span>

                                        </button>
                                    </div> <?php } ?>
                                <!-- End -->

                                <!-- Home -->
                                <div id="home" class="p-3">
                                    <form class="w-full" action="addp.php?h" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                   Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                   <!--          <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div> -->
                                          <!--   <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Total Rooms
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="troom" type="number" required placeholder="Total Rooms">
                                            </div> -->
                                      <!--       <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Drawing Room
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="droom" type="number" required placeholder="Drawing Room">
                                            </div>

                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Dinning
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="dinning" type="number" required placeholder="Dinning">
                                            </div>

                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Kitchen
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="kitchen" type="number" required placeholder="Kitchen">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Total Bathroom
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="tbath" type="number" placeholder="Total Bathroom" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Attach Bathroom
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="abath" type="number" placeholder="Attach Bathroom" required>
                                            </div> -->

                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="home1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="rent" type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add" id="add" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- Shop-->
                                <div id="shop" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?s" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="shop1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name=rent type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add2" id="add2" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- plot -->
                                <div id="plot" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?p" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="plot1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name=rent type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add3" id="add3" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- Field -->
                                <div id="field" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?f" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="field1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name=rent type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add4" id="add4" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- wareHouse -->
                                <div id="wareHouse" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?w" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="wareHouse1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name=rent type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add5" id="add5" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- Shopping Mall -->
                                <div id="shoppingMall" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?sm" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="shoppingMall1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name=rent type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add6" id="add6" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>

                                <!-- Flat -->
                                <div id="flat" class="p-3 hidden">
                                    <form class="w-full" action="addp.php?ft" method="post" enctype="multipart/form-data">
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Property Title
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="title" type="text" placeholder="Title" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Area
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="area" type="text" placeholder="Area" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Total Rooms
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="troom" type="number" required placeholder="Total Rooms">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Drawing Room
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="droom" type="number" required placeholder="Drawing Room">
                                            </div>

                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Dinning
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="dinning" type="number" required placeholder="Dinning">
                                            </div>

                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Kitchen
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="kitchen" type="number" required placeholder="Kitchen">
                                            </div>
                                            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-first-name">
                                                    Total Bathroom
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="tbath" type="number" placeholder="Total Bathroom" required>
                                            </div>
                                            <div class="w-full md:w-1/2 px-3">
                                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-light mb-1" for="grid-last-name">
                                                    Attach Bathroom
                                                </label>
                                                <input class="appearance-none block w-full text-grey-darker border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white-500 focus:border-gray-600" name="abath" type="number" placeholder="Attach Bathroom" required>
                                            </div>

                                        </div>
                                        <div class="flex flex-wrap -mx-3 mb-6">
                                            <div class="w-full px-3">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-password">
                                                    Location
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="location" type="text" placeholder="Address" required>
                                            </div>
                                        </div>
                                        <div id="flat1" class="flex flex-wrap -mx-3 mb-2">
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-city">
                                                    City
                                                </label>
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="city" type="text" placeholder="Islamabad" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                                <label class="block uppercase tracking-wide text-grey-darker text-xs font-light mb-1" for="grid-state">
                                                    State
                                                </label>
                                                <div class="relative">
                                                    <select class="block appearance-none w-full bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" name="state">
                                                        <option>Punjab</option>
                                                        <option>KPK</option>
                                                        <option>Balochistan</option>
                                                        <option>Sindh</option>
                                                    </select>
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
                                                <input class="appearance-none block w-full bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="rent" type="number" placeholder="45056" required>
                                            </div>
                                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0 mt-2">
                                                <input class="appearance-none bg-grey-200 text-grey-darker border border-grey-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-grey" name="image[]" type="file" placeholder="add image" required>
                                                <button type="button" name="add7" id="add7" class="bg-green-600 text-white rounded text-3xl pt-0.5 px-2 pb-2"> + </button>
                                            </div>

                                        </div>
                                        <div class="flex flex-row-reverse w-full m-2">
                                            <button class="bg-blue-500 hover:bg-blue-200 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-500 rounded">
                                                Submit
                                            </button> </div>
                                    </form>
                                </div>
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
    <script src="../addimg.js"></script>
</body>

</html>