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
    <title>All items | Rental Hub Admin</title>

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
                                <div class="bg-gray-200 px-2 py-3 border-solid border-gray-200 border-b">
                                    View Item Details
                                </div>
                                <div class="p-3">
                                    <table id="data" class="table-responsive w-full rounded">
                                        <thead>
                                            <tr>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(0)">No.</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(1)">Title</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(2)">Date</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(3)">Category</th>
                                                
                                               
                                              
                                                
                                                
                                               
                                               
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(11)">Location</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(12)">City</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(13)">Rent</th>
                                                <th class="border w-auto px-1 py-2" onclick="sortTable(14)">Approved</th>
                                                <th colspan="3" class="text-red-600 w-auto px-1 py-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $limit = 10;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $start = ($page - 1) * $limit;
                                            $i = isset($_GET['page']) ? ($page - 1) * $limit : 0;
                                            
                                            $con = mysqli_connect('localhost', 'root', '', 'renthub'); 
                                            $email = $_SESSION['email'];
                                            $q = "select * from property where email = '$email' LIMIT $start , $limit;";
                                            $pages = 0;
                                            $result = mysqli_query($con, $q);
                                            if ($result->num_rows > 0) {

                                                $q = "select COUNT(pId) as id from property";
                                                $result1 = mysqli_query($con, $q);
                                                $res1 = $result1->fetch_all(MYSQLI_ASSOC);
                                                $total = $res1[0]['id'];
                                                //   $total = mysqli_num_rows($result1);
                                                $pages = ceil($total / $limit);
                                                $pre = $page - 1;
                                                if ($pre == 0) $pre = 1;
                                                $next = $page + 1;
                                                if ($next > $pages) $next = $page;
                                                while ($value = $result->fetch_assoc()) {
                                                    $i++;
                                            ?>

                                                    <tr>
                                                        <td class="border px-1 py-2"><?php echo $i; ?> </td>
                                                        <td class="border px-1 py-2"><?php echo $value['pTitle'] ?> </td>
                                                        <td class="border px-1 py-2"><?php echo $value['pDate'] ?> </td>
                                                        <td class="border px-1 py-2"><?php echo $value['pCat'] ?> </td>
                                                          
                                                        
                                                      
                                                         
                                                        <td class="border px-1 py-2"><?php echo $value['pLocation'] ?> </td>
                                                        <td class="border px-1 py-2"><?php echo $value['pCity'] ?> </td>
                                                        <td class="border px-1 py-2"><?php echo $value['pRent'] ?> </td>

                                                        <td class="border px-1 py-2"> <?php
                                                                                        $status = $value['pStatus'];
                                                                                        if ($status == 1) { ?>
                                                                <i class="text-green-600 flex justify-center fas fa-check"></i>
                                                            <?php } else { ?>

                                                                <i class="text-red-600 flex text-center fas fa-times"></i> <?php } ?>
                                                        </td>
                                                        <td class="w-8">
                                                            <a class="p-1 bg-teal-300 cursor-pointer rounded text-white" href="post.php?previewid=<?php echo $value['pId']; ?>">
                                                                <i class="fas fa-eye"></i></a></td>
                                                        <td class="w-8"> <a class="p-1 bg-teal-300 cursor-pointer rounded text-white" href="editProperty.php?editid=<?php echo $value['pId']; ?>">
                                                                <i class="fas fa-edit"></i></a></td>
                                                        <td class="w-8"> <a class="p-1 bg-teal-300 cursor-pointer rounded text-red-500" href="../approve.php?pdelid=<?php echo $value['pId']; ?>">
                                                                <i class="fas fa-trash"></i>
                                                            </a> </td>


                                                <?php }
                                            }
                                            $con = null; ?>

                                        </tbody>
                                    </table>

                                    <!-- tailwind pagination -->
                                    <div class="py-4">
                                        <nav class="block">
                                            <ul class="flex pl-0 rounded list-none flex-wrap">
                                                <li>
                                                    <!-- <a  class="first:ml-0 text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative border border-solid border-teal-500 text-white bg-teal-500"> -->
                                                    <a href="?page=<?= $pre; ?>" class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-l">
                                                        Prev
                                                    </a>
                                                </li>
                                                <li>
                                                    <?php for ($j = 1; $j <= $pages; $j++) : ?>
                                                        <!-- <a class="first:ml-0 text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative border border-solid border-teal-200 text-white bg-teal-200"> -->
                                                        <a class="m-1 bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 " href="?page=<?= $j; ?>"><?= $j; ?>

                                                        </a>
                                                </li> <?php endfor; ?>
                                            <li>
                                                <!-- <a href="?page=<?= $next; ?>" class="first:ml-0 text-xs font-semibold flex w-8 h-8 mx-1 p-0 rounded-full items-center justify-center leading-tight relative border border-solid border-teal-500 bg-white text-teal-500"> -->
                                                <a href="?page=<?= $next; ?>" class="bg-teal-200 hover:bg-teal-500 text-teal-900 font-bold py-2 px-4 rounded-r">
                                                    Next
                                                </a>
                                            </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>
                        <!--/Grid Form-->
                    </div>
                </main>
                <!--/Main-->
            </div>
            <!--Footer-->
            <?php include "footer.php"; ?>
            <!--/footer-->

        </div>

    </div>
    <script src="../main.js"></script>
</body>

</html>