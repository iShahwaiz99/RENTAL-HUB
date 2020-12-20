<?php session_start();
if ($_SESSION['type'] != "user" || $_SESSION['status'] != "2"){
    header("location:../../login.php?erruser");
} ?>
<header class="bg-nav">
                <div class="flex justify-between">
                    <div class="p-1 mx-3 inline-flex items-center">
                        <i class="fas fa-bars pr-2 text-white" onclick="sidebarToggle()"></i>
                        <h1 class="text-white p-2">Rental Hub</h1>
                    </div>
                    <div class="p-1 flex flex-row items-center">
                        <img onclick="profileToggle()" class="inline-block h-8 w-8 rounded-full" src="../dist/images/<?php echo $_SESSION['image'] ?>" alt="">
                        <a href="#" onclick="profileToggle()" class="text-white p-2 no-underline hidden md:block lg:block"><?php echo $_SESSION['name'] ?></a>
                        <div id="ProfileDropDown" class="rounded hidden shadow-md bg-white absolute top-0 mt-12 mr-1 right-0">
                        <ul class="list-reset">
                          <li><a href="index.php" class="no-underline px-4 py-2 block text-black hover:bg-gray-300">My account</a></li>
                          <li><a href="editProfile.php" class="no-underline px-4 py-2 block text-black hover:bg-gray-300">Edit Profile</a></li>
                          <li><hr class="border-t mx-2 border-gray-ligght"></li>
                          <li><a href="../../logout.php" class="no-underline px-4 py-2 block text-black hover:bg-gray-300">Logout</a></li>
                        </ul>
                    </div>
                </div>
                </div>
            </header>