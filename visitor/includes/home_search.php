<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sOption").hide();
        $("#cat").val("House");

        $("#home").show();
        $("#shop").hide();
        $("#plot").hide();
        $("#flat").hide();
        $("#shoppingMall").hide();
        $("#field").hide();
        $("#wareHouse").hide();

        $("select#sc").val("h");
        $("#hOption").hover(function() {
            $("#sOption").show();
        }, function() {
            $("#sOption").hide();
        });
        $("#h").click(function() {
            $("#home").show();
            $("#shop").hide();
            $("#plot").hide();
            $("#flat").hide();
            $("#shoppingMall").hide();
            $("#field").hide();
            $("#wareHouse").hide();
            $("#cat").val("House");
        });
        $("#s").click(function() {
            $("#shop").show();
            $("#home").hide();
            $("#plot").hide();
            $("#flat").hide();
            $("#shoppingMall").hide();
            $("#field").hide();
            $("#wareHouse").hide();
            $("#cat").val("Shop");
        });
        $("#p").click(function() {
            $("#home").hide();
            $("#shop").hide();
            $("#plot").show();
            $("#flat").hide();
            $("#shoppingMall").hide();
            $("#field").hide();
            $("#wareHouse").hide();
            $("#cat").val("Plot");
        });
        $("#f").click(function() {
            $("#home").hide();
            $("#shop").hide();
            $("#plot").hide();
            $("#flat").hide();
            $("#shoppingMall").hide();
            $("#field").show();
            $("#wareHouse").hide();
            $("#cat").val("Field");
        });
        $("#ft").click(function() {
            $("#home").hide();
            $("#shop").hide();
            $("#plot").show();
            $("#flat").show();
            $("#shoppingMall").hide();
            $("#field").hide();
            $("#wareHouse").hide();
            $("#cat").val("Flat");
        });
        $("#w").click(function() {
            $("#home").hide();
            $("#shop").hide();
            $("#plot").hide();
            $("#flat").hide();
            $("#shoppingMall").hide();
            $("#field").hide();
            $("#wareHouse").show();
            $("#cat").val("WareHouse");
        });
        $("#sm").click(function() {
            $("#home").hide();
            $("#shop").hide();
            $("#plot").hide();
            $("#flat").hide();
            $("#shoppingMall").show();
            $("#field").hide();
            $("#wareHouse").hide();
            $("#cat").val("ShoppingMall");
        });
    });
</script>
<div class="py-20 bg-cover bg-no-repeat bg-right lg:px-16" style="background-image:url(img/header_img.jpg);">
    <div class="text-white text-center mb-10">
     
    </div>

    <div class="text-center w-full" id="hOption">
        <form action="search.php" method="post">
            <div class="lg:inline-block !important w-auto bg-white bg-opacity-25 p-2 rounded-t">

                <div class="lg:flex items-center bg-white px-4 py-2 rounded">


                    <span class="flex p-3">
                        <img src="img/house_icon.svg" alt="">

                        <input type="text" name="title" class="placeholder-gray-700 py-2 px-4 focus:outline-none" placeholder="Item">
                    </span>

                    <span class="hidden lg:inline border-gray-500 border-r-2 mr-5"> &nbsp;</span>


                    <span class="flex p-3">
                        <img src="img/location_icon.svg" alt="">

                        <input type="text" name="location" class="placeholder-gray-700 py-2 px-4 focus:outline-none" placeholder="Location">
                    </span>

                    <span class="hidden lg:inline border-gray-500 border-r-2 mr-5"> &nbsp;</span>

                    <span class="flex p-3">
                        <img src="img/sale_icon.svg" alt="">
                        <div class="relative flex p-2">
                            <select id="sc" class="block ml-5 appearance-none bg-grey-200 border border-grey-200 text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-grey" id="grid-state" onChange="showDiv(this)">
                                <option value="h" id="h">Machine</option>
                                <option id="s">Furniture</option>
                               
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-grey-darker">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div> <input type="text" name="cat" id="cat" value="House" hidden>

                    </span>

                </div>
                <div class="w-full flex p-3 lg:inline-block bg-white rounded -mt-2" id="sOption">
                    <hr>
                   
                    <input type="number" name="sprice" class="w-32 placeholder-gray-700 py-2 px-4 focus:outline-none" placeholder="Start Price">
                    <input type="number" name="eprice" class="w-32 placeholder-gray-700 py-2 px-4 focus:outline-none" placeholder="End Price">

                    <div id="shop" class="lg:inline-block hidden">
                        <span class="flex justify-center p-3">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="home">
                        <span class="flex justify-center p-3">
                            
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="plot">
                        <span class="flex justify-center p-3">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="wareHouse">
                        <span class="flex justify-center p-3">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="shoppingMall">
                        <span class="flex justify-center p-3">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="field">
                        <span class="flex justify-center p-3">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                    <div class="lg:inline-block hidden" id="flat">
                        <span class="flex justify-center p-3">
                            <input type="number" name="room" class="w-32 placeholder-gray-700 py-2 px-4 focus:outline-none" placeholder="Rooms">
                            <button type="submit" class="bg-secondary hover:bg-secondary-hover text-white rounded flex py-2 px-4 w-full lg:w-auto justify-center">
                                Search
                                <img src="img/search_icon.svg" alt="" class="pl-5">
                            </button></span> </div>

                </div>


            </div>
        </form>
    </div>


</div>