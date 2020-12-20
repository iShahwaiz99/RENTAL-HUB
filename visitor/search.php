<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/products-list.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

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
    <script type="text/javascript">
        $("#all").click(function() {
            $_POST = array();
        });
    </script>
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
                <div class="w-1/2">
                    <h3 class="text-gray-700 text-2xl font-medium">Properties</h3>
                    <span class="mt-3 text-sm text-gray-500">200+ Properties</span>
                    <a id="all" href="?all" class="text-blue-600 hover:text-yellow-600"> see all posts </a>
                </div>
                <div class="w-full flex justify-end bg-white">
                    <span> Sort by title: 
                    <a href="?sort=na" ><i class="ml-2 fa fa-sort-numeric-asc text-black" aria-hidden="true"></i></a>
                    <a href="?sort=nd" ><i class="ml-2 fa fa-sort-numeric-desc" aria-hidden="true"></i></a></span>
                    <span class="ml-5"> Sort by Price: 
                    <a href="?sort=aa" ><i class="ml-2 fa fa-sort-alpha-asc" aria-hidden="true"></i></a>
                    <a href="?sort=ad" ><i class="ml-2 fa fa-sort-alpha-desc" aria-hidden="true"></i></a> </span>

                </div>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <?php
                    $limit = 10;
                    $page = isset($_GET['page']) ? $_GET['page'] : 1;
                    $location = isset($_POST['location']) ? $_POST['location'] : "";
                    $title = isset($_POST['title']) ? $_POST['title'] : "";
                    $area = isset($_POST['area']) ? $_POST['area'] : "";
                    $room = isset($_POST['room']) ? $_POST['room'] : "";
                    $sprice = isset($_POST['sprice']) ? $_POST['sprice'] : "";
                    $eprice = isset($_POST['eprice']) ? $_POST['eprice'] : "";
                    $cat = isset($_POST['cat']) ? $_POST['cat'] : "";
                    $start = ($page - 1) * $limit;
                    $i = isset($_GET['page']) ? ($page - 1) * $limit : 0;
                    $con = mysqli_connect('localhost', 'root', '', 'renthub');

                    // $location= isset($_REQUEST['location']) ? htmlspecialchars($_REQUEST['location']) : "" ;

                    if ($cat != "") {
                        if ($sprice != "" && $eprice != "" && $area != "") {
                            $q = "select *  from property as p left join image on p.pId = image.ppId where p.pRent BETWEEN '$sprice' AND '$eprice' AND p.pCity like '%$location%' AND p.pTArea like '%$area%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pTArea = '$area' AND p.pStatus=1 AND pCat = '$cat'";
                            // $q2 = "select COUNT(property.pId) as id  from property as p left join image on p.pId = image.ppId where p.pRent BETWEEN '$sprice' AND '$eprice' AND p.pCity like '%$location%' AND p.pTArea like '%$area%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pTArea = '$area' AND p.pStatus=1 AND pCat = '$cat' LIMIT $start , $limit;";
                        } else if ($sprice != "" && $eprice != "") {
                            $q = "select *  from property as p left join image on p.pId = image.ppId where p.pRent BETWEEN '$sprice' AND '$eprice' AND p.pCity like '%$location%' AND p.pTArea like '%$area%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1 AND pCat = '$cat'";
                            // $q2 = "select COUNT(property.pId) as id  from property as p left join image on p.pId = image.ppId where p.pRent BETWEEN '$sprice' AND '$eprice' AND p.pCity like '%$location%' AND p.pTArea like '%$area%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1 AND pCat = '$cat' LIMIT $start , $limit;";
                        } else if ($area != "") {
                            $q = "select *  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pTArea = '$area' AND p.pStatus=1 AND pCat = '$cat'";
                            // $q2 = "select COUNT(property.pId) as id  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pTArea = '$area' AND p.pStatus=1 AND pCat = '$cat' LIMIT $start , $limit;";
                        } else {
                            $q = "select *  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1 AND pCat = '$cat'";
                            //  $q2 = "select COUNT(property.pId) as id  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1 AND pCat = '$cat'LIMIT $start , $limit;";
                        }
                    } else {
                        $q = "select *  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1";
                    }

                    //  $q = "select *  from property as p left join image on p.pId = image.ppId where p.pCity like '%$location%' AND p.pTArea like '%$area%' AND p.pTRoom like '%$room%' AND p.pTitle like '%$title%' AND p.pStatus=1 LIMIT $start , $limit;";
                    $pages = 0;
                  //  $_SESSION['query'] = $q;
                    if (isset($_GET['sort']) && $_GET['sort'] != ""){
                        $as=$_GET['sort'];
                        if ($as=="na"){
                            $q = $q." ORDER BY p.pTitle";
                        }else if ($as=="nd"){
                            $q = $q." ORDER BY p.pTitle DESC";
                        } else if ($as=="aa"){
                            $q = $q." ORDER BY p.pRent";
                        } else if ($as=="ad"){
                            $q = $q." ORDER BY p.pRent DESC";
                        }
                    } 
                    $q = $q." LIMIT $start , $limit";
                    $result = mysqli_query($con, $q);
                    if ($result->num_rows > 0) {

                        $q2 = "select COUNT(property.pId) as id from property left join image on property.pId = image.ppId where property.pStatus=1";
                        $result1 = mysqli_query($con, $q2);
                        $res1 = $result1->fetch_all(MYSQLI_ASSOC);
                        $total = $res1[0]['id'];
                        //   $total = mysqli_num_rows($result1);
                        $pages = ceil($total / $limit);
                        $pre = $page - 1;
                        if ($pre == 0) $pre = 1;
                        $next = $page + 1;
                        if ($next > $pages) $next = $page;
                        $pid = 0;
                        while ($value = $result->fetch_assoc()) {
                            $i++;
                            if ($pid == $value['pId']) {
                            } else {
                                $pid = $value['pId'];
                                $image = (is_null($value['iImage'])) ? "../db/dist/images/default.jpg" : "../db/dist/images/" . $value['iImage'];
                    ?>
                                <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                                    <a href='post.php?id=<?php echo $value['pId']; ?>'>
                                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url(<?php echo $image; ?>)">
                                        </div>
                                    </a>
                                    <div class="px-5 py-3">
                                        <h3 class="text-gray-700 uppercase"><?php echo $value['pTitle'] ?></h3>
                                        <span class="text-gray-500 mt-2">PKR: <?php echo $value['pRent'] ?> </span><br>
                                        <span class="text-gray-500 mt-2">Location: <?php echo $value['pLocation'] . ", " . $value['pCity'] ?> </span>
                                    </div>
                                </div>

                    <?php }
                        }
                    } else { ?>
                        <div class="flex justify-center inline-block w-full">
                    <h3 class="text-black uppercase text-lg mt-4">Prperty not found go back to home page: <a href="index.php" class="ml-2 px-8 py-2 bg-blue-500 text-white text-sm font-medium rounded hover:bg-blue-400">Home page</a> </h3>
                                    
                                    </div>
                    <?php }
                    $con = null; ?>


                </div>
                <div class="flex justify-center">

                    <!-- Pagination -->
                    <div class="flex rounded-md mt-8">
                        <a href="?page=<?= $pre; ?>" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-blue-500 hover:text-white"><span>Previous</a></a>
                        <?php for ($j = 1; $j <= $pages; $j++) : ?>
                            <a class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 border-r-0 hover:bg-blue-500 hover:text-white" href="?page=<?= $j; ?>"><?= $j; ?></a>
                        <?php endfor; ?>
                        <a href="?page=<?= $next; ?>" class="py-2 px-4 leading-tight bg-white border border-gray-200 text-blue-700 rounded-r hover:bg-blue-500 hover:text-white"><span>Next</span></a>
                    </div>
                </div>
            </div>
        </main>
        <!-- bottom -->
        <?php include 'includes/bottom.php'; ?>
        <!-- bottom end -->
        <?php include 'includes/footer.php'; ?>
        <!--  footer end-->


        <script src="js/util.js"></script>
    </div>
</body>

</html>