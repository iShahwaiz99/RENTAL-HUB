<script>
    window.onload = function() {
        var loc = window.location.href; // returns the full URL
           if(/index.php/.test(loc)) {
        var e = document.getElementById("main");
        e.classList.add("bg-white");
    }
    if(/allProperty.php/.test(loc)) {
        var e = document.getElementById("allp");
        e.classList.add("bg-white");
    }
    if(/editProfile.php/.test(loc)) {
        var e = document.getElementById("ep");
        e.classList.add("bg-white");
    }
    if(/addProperty.php/.test(loc)) {
        var e = document.getElementById("ad");
        e.classList.add("bg-white");
    }
    };
</script>

<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col">
        <li id="main" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="index.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-user-alt float-left mx-2"></i>
                User Profile
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="ad" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="../user/addProperty.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-wpforms float-left mx-2"></i>
                Add Items
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="allp" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="allProperty.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fab fa-uikit float-left mx-2"></i>
                View Items
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li id="ep" class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="editProfile.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-grip-horizontal float-left mx-2"></i>
                Update Profile
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class="w-full h-full py-3 px-2 border-b border-light-border">
            <a href="../../logout.php" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                <i class="fas fa-grip-horizontal float-left mx-2"></i>
                Logout
                <span><i class="fa fa-angle-right float-right"></i></span>
            </a>
        </li>
        
    </ul>

</aside>