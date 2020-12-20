<?php 

session_start();
// $_SESSION['email'] = "suleman@c.c";
$con = mysqli_connect('localhost', 'root', '','renthub');
$title = $_POST['title'];
$location = $_POST['location'];
$state = $_POST['state'];
$rent = $_POST['rent'];
$city = $_POST['city'];
$area = $_POST['area'];
$email = $_SESSION['email'] ;
$date = date("Y/m/d");



if (isset($_GET['h'])) {
    $troom = $_POST['troom'];
    $droom = $_POST['droom'];
    $abath = $_POST['abath'];
    $tbath = $_POST['tbath'];
    $kitchen = $_POST['kitchen'];
    $dinning = $_POST['dinning'];
    $cat = "Machine";
    $reg = "insert into 
    property (email, pTitle, pCat, pTArea, pTRoom, pABath, pTBath, pKitchen, pDRoom, pDinning, pDate, pCity, pState, pLocation, pRent)
    values('$email','$title', '$cat', '$area', '$troom', '$abath', '$tbath', '$kitchen', '$droom', '$dinning', '$date', '$city', '$state', '$location', '$rent')";
    runQuery($con, $reg);
  
} else if (isset($_GET['s'])) {
    $cat = "Furniture";
    $reg = "insert into 
    property (email, pTitle, pCat, pTArea, pDate, pCity, pState, pLocation, pRent)
    values('$email','$title', '$cat', '$area', '$date', '$city', '$state', '$location', '$rent')";
    runQuery($con, $reg);


}

function runQuery($conn, $q){
    mysqli_query($conn, $q);
    $pid = $conn->insert_id;
    uploadImage($conn, $pid);
    header('location: addProperty.php?pass');
}

function uploadImage($conn, $pid) { 
    $image = $_FILES['image']['name'];      
foreach ($image as $key => $value){
    $image = $_FILES['image']['name'][$key];
    $imagePath = '../dist/images/'.$image;
    $tmp_name = $_FILES['image']['tmp_name'][$key];
    

    move_uploaded_file($tmp_name, $imagePath);
    $reg = "INSERT INTO image (ppId, iImage) VALUES ('$pid' , '$value')";
    mysqli_query($conn, $reg);
}
  }


?>
