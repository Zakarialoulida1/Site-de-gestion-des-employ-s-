<?php require APPROOT . '/views/inc/header.php'; ?>
<?php
// var_dump($_SESSION);
// die();
?>
  
<div id="sidebar" class="min-h-[640px] bg-gray-100 hidden fixed w-full lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0  z-50 ">

<div class="flex-1 flex flex-col min-h-0 bg-[#9ad0d3]">
    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
        <div class="flex  justify-between items-center  px-4">
            <button id="fermernav"><i class=" lg:hidden text-black fas fa-times fa-2xl"></i></button>
            <img class="lg:hidden h-12 inline-block m-2 " src="./img/logo (1).png" alt="Workflow">
        </div>
        <nav class="mt-5 flex-1 px-2 space-y-1">

            <button id="all" class=" hover:bg-[#BFD8D5] bg-[#9ad0d3] text-black group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-indigo-800 text-black&quot;, Default: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-[black]" x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                Dashboard
            </button>


            <button id="btnproject" class="text-black hover:bg-[#BFD8D5] hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-black&quot;, undefined: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
                <svg class="mr-3 flex-shrink-0 h-6 w-6 text-black" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                My Projects
            </button>


        </nav>
    </div>
    <div class="w-full flex justify-between items-center border-t border-black p-4">


        <div class="ml-3 flex flex-col">

            <img class='inline-block h-14 w-14 rounded-full  ' src="<?php echo URLROOT . '/img/' . $_SESSION['user_image']; ?>" alt=''>


            <p class="text-sm font-medium text-black">
                <?php echo   $;
                echo $Productowner->getuserlastname() ?>
            </p>

        </div>

        <a href="logout.php" class="p-4 w-fit h-fit text-center text-black text-xs font-medium bg-red-400 rounded-full">LOG OUT</a>


    </div>
</div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
