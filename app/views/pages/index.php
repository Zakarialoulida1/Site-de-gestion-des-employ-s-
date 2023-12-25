
<?php 

?>
<?php require APPROOT . '/views/inc/header.php'; ?>
<?php


// var_dump($_SESSION);
//         die();

$image=$_SESSION['user_image'];
$name=$_SESSION['user_name'];
$lastname=$_SESSION['user_lastname'];

?>

<div id="sidebar" class="min-h-[640px] bg-gray-100 hidden fixed w-full lg:flex lg:w-64 lg:flex-col lg:fixed lg:inset-y-0  z-50 ">

    <div class="flex-1 flex flex-col min-h-0 bg-[#9ad0d3]">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
            <div class="flex  justify-between items-center  px-4">
                <button id="fermernav"><i class=" lg:hidden text-black fas fa-times fa-2xl"></i></button>
                <img class="lg:hidden h-12 inline-block m-2 " src="./img/logo (1).png" alt="Workflow">
            </div>
            <nav class="mt-5 flex-1 px-2 space-y-1">

              


                <a id="btnproject" class="text-black hover:bg-[#BFD8D5] hover:bg-opacity-75 group flex items-center px-2 py-2 text-sm font-medium rounded-md" x-state-description="undefined: &quot;bg-indigo-800 text-black&quot;, undefined: &quot;text-black hover:bg-[#BFD8D5] hover:bg-opacity-75&quot;">
                    <svg class="mr-3 flex-shrink-0 h-6 w-6 text-black" x-description="Heroicon name: outline/folder" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    My Projects
</a>


            </nav>
        </div>
        <div class="w-full flex justify-between items-center border-t border-black p-4">


            <div class="ml-3 flex flex-col">

                <img class='inline-block h-14 w-14 rounded-full  ' src="<?php echo URLROOT . '/img/' . $image; ?>" alt=''>


                <p class="text-sm font-medium text-black">
                    <?php echo  $name;
                    echo $lastname; ?>
                </p>

            </div>

            <a href="<?php echo URLROOT; ?>/users/logout" class="p-4 w-fit h-fit text-center text-black text-xs font-medium bg-red-400 rounded-full">LOG OUT</a>


        </div>
    </div>
</div>
<div class=" lg:pl-64 flex flex-col flex-1">
    <div class="sticky top-0 z-10 lg:hidden pl-1 pt-1 sm:pl-3 sm:pt-3 bg-gray-100">
        <button type="button" class="burgermenu -ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <span class="sr-only">Open sidebar</span>
            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <main class="flex-1 ">


        <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 md:px-8 flex justify-between items-center ">
            <div>
                <h1>Hello, <?php echo $name; ?></h1>

            </div>

            <a href="<?php echo URLROOT; ?>/pages/project " class="p-4 w-fit h-fit text-center text-black text-xs font-medium bg-green-400 rounded-full"><button>Create a Project</button></a>




        </div>

        <div class="myproject bg-gray-100 py-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h1 class=" text-center">YOUR PROJECTS </h1>

                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3  2lg:grid-cols-4">
                   





                            <li class=" col-span-1 flex flex-col text-center bg-white rounded-lg shadow  divide-gray-200">
                                <div class="flex-1 flex flex-col justify-between p-8 ">

                                    <h3 class=" text-gray-900 text-sm font-medium"><?php echo "projectName" ?></h3>


                                    <div class="  text-gray-500  text-sm">
                                        <?php
                                        echo "<p class='mb-3 font-normal text-gray-700'> description</p>";

                                        ?>
                                    </div>


                                    <div class="  flex justify-between">
                                        <span class="px-2 py-1 text-g*reen-800 text-xs font-medium bg-green-100 rounded-full"><?php ?></span>
                                        <span class="px-2 py-1 text-green-800 text-xs font-medium bg-red-400 rounded-full"><?php  ?></span>
                                    </div>


                                </div>
                                <div class="-mt-px flex divide-x divide-gray-200  ">





                                    <form class=" w-0 flex-1 flex" method="post">

                                        <input type="hidden" name="deleteId" value="<?php  ?>">
                                        <button type="submit" id="delete it" class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 ml-3">Delete it</button>


                                    </form>
                                    <form class="-ml-px w-0 flex-1 flex" action="" method="GET">
                                        <input type="hidden" name="updateProjectID" id="updateProjectID" value="<?php ?>">
                                        <a href="editproject.php?id=<?php  ?>" class="btn_update_project relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500 ml-3"> UPDATE
                                        </a>
                                    </form>
                                </div>


                            </li>

                    

                    </ul>



    </main>
    <?php require APPROOT . '/views/inc/footer.php'; ?>