<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/products-list.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <title> View Property </title>

    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

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
    
</head>

<body class="flex items-center justify-center" style="background: #edf2f7;">
    <script src="js/alpine.min.js" defer></script>

    <div class="bg-white w-full">
        <?php include 'includes/navbar.php'; ?>
        <!-- navbar ends -->

        <!-- home search -->
        <?php include 'includes/home_search.php'; ?>
        <!-- home search ends -->

        <main class="my-8">
            <div class="container mx-auto px-6">
                <div class="md:flex md:items-center">
                    <?php if (!isset($_GET['id'])) {
                    ?> <h3 class="text-gray-700 uppercase text-lg">Product not found go back to home page: </h3>
                        <a href="index.php" class="ml-5 px-8 py-2 bg-secondary text-white text-sm font-medium rounded hover:bg-secondary-hover focus:outline-none focus:bg-secondary-focus">Home page</a>
                    <?php } ?>

                    <?php if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $con = mysqli_connect('localhost', 'root', '', 'renthub');
                        $q = "select * from property left join image on property.pId = image.ppId where property.pId = $id";
                        $result = mysqli_query($con, $q);
                        $res = $result->fetch_assoc();
                        $email = $res['email'];
                        $cat = $res['pCat'];
                        ?><div class="w-3/4 mx-auto my-20 bg-white">
                        <div id="slider" class="swiper-container w-full">
                            <div class="swiper-wrapper">
                                <?php $result = mysqli_query($con, $q);
                                while ($value = $result->fetch_assoc()) {
                                    $image = (is_null($value['iImage'])) ? "../db/dist/images/default.jpg" : "../db/dist/images/" . $value['iImage'];
                                ?>
                                    <div class="swiper-slide bg-cover bg-center"> <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto shadow-md" src=<?php echo $image ?> alt="Property Picture">
                                    </div> <?php } ?>
                            </div>
                            <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>
                            <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                        <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/3 border-r-2 border-l-2 p-4 rounded shadow-lg">
                            <h3 class="text-gray-700 uppercase text-lg"><?php echo $res['pTitle']; ?></h3>
                            <span class="text-gray-500 mt-3">PKR: <?php echo $res['pRent']; ?></span> <br>
                            <span class="text-gray-500 mt-3">Post Date: <?php echo $res['pDate']; ?></span>
                            <hr class="my-3">
                            <h3 class="text-gray-700 uppercase text-lg">Seller Discription:</h3>
                            <?php $q = "select * from rtable where email = '$email'";
                            $result1 = mysqli_query($con, $q);
                            $res1 = $result1->fetch_assoc();
                            ?>
                            <span class="text-gray-500 mt-3">Name: <?php echo $res1['name']; ?></span> <br>
                            <span class="text-gray-500 mt-3">Email: <?php echo $res1['email']; ?></span> <br>
                            <span class="text-gray-500 mt-3">Phone: <?php echo $res1['phone']; ?></span>
                            <div class="flex items-center mt-6">
                                <button class="px-8 py-2 bg-secondary text-white text-sm font-medium rounded hover:bg-secondary-hover focus:outline-none focus:bg-secondary-focus">Chat with seller</button>
                                <button class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 32 32" stroke="currentColor">
                                        <path d="M16,28.261c0,0-14-7.926-14-17.046c0-9.356,13.159-10.399,14-0.454c1.011-9.938,14-8.903,14,0.454 C30,20.335,16,28.261,16,28.261z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                </div>
                <div class="w-full h-full md:-w-1/4 lg:h-96">
                        <hr class="my-3">
                            <h3 class="text-gray-700 uppercase text-lg">Detail: </h3>
                            <?php if($cat == "House") { ?>
                            <table class="w-full table-responsive overflow-hidden">
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">Total Area: <?php echo $res['pTArea'] ?> </span> </td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Total Room: <?php echo $res['pTRoom'] ?> </span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">Drawing Room: <?php echo $res['pDRoom'] ?> </span> </td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Dinning Hall: <?php echo $res['pDinning'] ?> </span> </td>
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">Kitchen: <?php echo $res['pKitchen'] ?> </span></td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Attach Bath: <?php echo $res['pABath'] ?> </span> </td>
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">Total Bath: <?php echo $res['pTbath'] ?> </span> </td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Lacation: <?php echo $res['pLocation'] ?> </span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">City: <?php echo $res['pCity'] ?> </span>
                                    </td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Rent: <?php echo $res['pRent'] ?> </span> </td>
                                </tr>
                            </table> <?php } else { ?>
                                <table class="w-full table-responsive overflow-hidden">
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">Total Area: <?php echo $res['pTArea'] ?> </span> </td>
                                    <td>
                                    <span class="text-gray-500 mt-3">Lacation: <?php echo $res['pLocation'] ?> </span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="text-gray-500 mt-3">City: <?php echo $res['pCity'] ?> </span>
                                    </td>
                                    <td>
                                        <span class="text-gray-500 mt-3">Rent: <?php echo $res['pRent'] ?> </span> </td>
                                </tr>
                            </table> <?php } ?>
                        </div>
                        <div class="w-full h-full md:w-1/4 lg:h-96">
                        </div>
            </div> <?php }
                    $con = null; ?>
        </main>

        <main class="my-8 mt-16">
            <div class="container mx-auto px-6">
                <h3 class="text-gray-600 text-2xl font-medium"></h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <?php
                    $limit = 5;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $start = ($page - 1) * $limit;
                    $i = isset($_GET['page']) ? ($page - 1) * $limit : 0;
                    $con = mysqli_connect('localhost', 'root', '', 'renthub');

                    //  
                    $q = "select * from property left join image on property.pid=image.ppid where property.pStatus=1 LIMIT $start , $limit;";
                    $pages = 1;
                    $result = mysqli_query($con, $q);
                    if ($result->num_rows > 0) {

                        $q = "select COUNT(pId) as id from property where pStatus=1";
                        $result1 = mysqli_query($con, $q);
                        $res1 = $result1->fetch_all(MYSQLI_ASSOC);
                        $total = $res1[0]['id'];
                        //   $total = mysqli_num_rows($result1);
                        $pages = ceil($total / $limit);
                        $pre = $page - 1;
                        if ($pre == 0) $pre = 1;
                        $next = $page + 1;
                        if ($next > $pages) $next = $page;
                        $pid =0;
                        while ($value = $result->fetch_assoc()) {
                            $i++; if ($pid == $value['pId']){

                            } else{ $pid = $value['pId'];
                            $image = (is_null($value['iImage'])) ? "../db/dist/images/default.jpg" : "../db/dist/images/".$value['iImage'];
                    ?>
                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                <a href='post.php?id=<?php echo $value['pId']; ?>'>
                                    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url(<?php echo $image ?>)">
                                    </div>
                                </a>
                                <div class="px-5 py-3">
                                    <h3 class="text-gray-700 uppercase"><?php echo $value['pTitle'] ?></h3>
                                    <span class="text-gray-500 mt-2">PKR <?php echo $value['pRent'] ?> </span>
                                    <span class="text-gray-500 mt-2">Location <?php echo $value['pLocation'].", ".$value['pCity'] ?> </span>
                                </div>
                            </div>

                    <?php }}
                    }
                    $con = null; ?>


                </div>
            </div>
        </main>
        <!-- bottom -->
        <?php include 'includes/bottom.php'; ?>
        <!-- bottom end -->
        <?php include 'includes/footer.php'; ?>
        <!--  footer end-->


        <script src="js/util.js"></script>
        <script src="../db//main.js"></script>
    </div>
</body>

</html>