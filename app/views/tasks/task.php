<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="flex justify-around items-center p-8 text-xl bg-[#1f9fa6]">
    <h1> This is your tasks for this project</h1>

    <button id="addTaskButton" CLASS="bg-[#9ad0d9]  p-2 rounded"> Add Task</a>



</div>


<div class=" h-screen w-[100%] flex flex-wrap justify-evenly  items-start p-8 overflow-x-scroll  bg-[#9ad0d3]">
    <div class="rounded bg-grey-light w-96 p-2 m-3">
        <div class="flex justify-between py-1">
            <h3 class="text-sm">TO DO </h3>
            <svg class="h-4 fill-current text-grey-dark cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
        </div>
        <div id="todo" class="text-sm mt-2">
            <!-- <div  class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                
            </div> -->



            <!-- <div class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                Check the responsive layout on all devices
                <div class="text-grey-darker mt-2 ml-2 flex justify-between items-start">
                    <span class="text-xs flex items-center">
                        <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                        </svg>
                        3/5
                    </span>
                    <img src="https://i.imgur.com/OZaT7jl.png" class="rounded-full" />
                </div>
            </div> -->

        </div>
    </div>
    <div class="rounded bg-grey-light w-96 p-2 m-3" id="doing">
        <div class="flex justify-between py-1">
            <h3 class="text-sm">DOING</h3>
            <svg class="h-4 fill-current text-grey-dark cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
        </div>
        <div class="text-sm mt-2">
            <!--          
            <div class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                <p>Think more tasks for this example</p>
                <div class="bg-red rounded p-1 mt-2 inline-flex text-white text-xs">
                    <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                    </svg>
                    2
                </div>
            </div> -->

        </div>
    </div>
    <div class="rounded bg-grey-light w-96 p-2 m-3">
        <div class="flex justify-between py-1">
            <h3 class="text-sm">Done</h3>
            <svg class="h-4 fill-current text-grey-dark cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
            </svg>
        </div>
        <div class="text-sm mt-2" id="done">




            <!-- <div class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">
                <p>Think more tasks for this example</p>
                <div class="bg-red rounded p-1 mt-2 inline-flex text-white text-xs">
                    <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                    </svg>
                    2
                </div>
            </div> -->


        </div>
    </div>
</div>



<!-- Votre bouton d'ajout de tâche -->

<!-- La forme de la tâche (initiallement cachée avec la classe hidden) -->
<div id="taskForm" class="hidden fixed inset-0 bg-gray-700 bg-opacity-75 z-10 flex items-center justify-center">
    <div class="bg-white p-8 rounded shadow-md">
        <form action="<?php echo URLROOT . '/tasks/add_task/' . $data['id_project'] ?>" method="post">
            <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Add Task :</h1>
            <label for="taskName" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Task Name:</label>
            <input id="taskName" name="titre" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="" />
            <!-- Ajoutez d'autres champs nécessaires pour votre formulaire de tâche -->
            <div class="flex flex-col m-4">
                <label for="startDate">DEADLINE</label>
                <input class=" border-2 border-black rounded" type="date" id="startDate" name="deadline">
                <label for="startDate">STATUS</label>
                <select name="status" id="" class="border-2 border-black rounded">
                    <option value="-1">to do </option>
                    <option value="0">doing </option>
                    <option value="1"> done</option>
                </select>
            </div>
            <div class="flex items-center justify-start w-full">
                <input id="submitTask" value="Add Task" type="submit" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm">
                <button id="cancelTask" class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm close">Cancel</button>
            </div>

        </form>
        <button id="closeTaskForm" class="cursor-pointer absolute top-0 right-0 mt-4 mr-5 text-gray-400 hover:text-gray-600 transition duration-150 ease-in-out rounded focus:ring-2 focus:outline-none focus:ring-gray-600 close" aria-label="close modal" role="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" />
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>
    </div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

<script>
    // // JavaScript pour gérer l'affichage de la forme de la tâche
    // const addTaskButton = document.getElementById('addTaskButton');
    // const taskForm = document.getElementById('taskForm');
    // const closeTaskFormButton = document.getElementById('closeTaskForm');
    // const cancelTaskButton = document.getElementById('cancelTask');

    // addTaskButton.addEventListener('click', () => {
    //     taskForm.classList.remove('hidden');
    // });

    // closeTaskFormButton.addEventListener('click', () => {
    //     taskForm.classList.add('hidden');
    // });

    // cancelTaskButton.addEventListener('click', () => {
    //     taskForm.classList.add('hidden');
    // });
</script>

<!-- Include jQuery (you can include it from a CDN) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function() {
        // Function to fetch tasks using AJAX with jQuery
        function fetchTaskstodo() {

            const fetchUrl = '<?php echo URLROOT . '/tasks/fetch_tasks/' . $data['id_project']; ?>';
            console.log(fetchUrl);
            //   console.log(fetchUrl);

            $.ajax({
                url: fetchUrl,
                type: 'GET',
                dataType: 'json',
                success: function(tasks) {
                    // console.log(tasks);

                    tasks.forEach(task => {

                        const tagElement = document.createElement("div");
                        const icon1 = document.createElement("div");
                        icon1.className = "w-fit flex gap-2"
                        tagElement.className = "bg-white p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        tagElement.textContent = task.titre;
                        const deadline = document.createElement("span");
                        deadline.className = "bg-red-400 p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        deadline.textContent = task.deadline;

                      /*********************archiver icone and url ********** */
                        const archive = document.createElement("i");
                        archive.className = "fa-solid fa-box-archive bg-red-400 p-1 rounded cursor-pointer h-[20px]  ";
                        const anchorElement2 = document.createElement("a");
                        anchorElement2.href = " <?php echo URLROOT . '/tasks/archive_task/'; ?>" + task.id_task; // Replace '#' with the actual href value
                        anchorElement2.appendChild(archive);
                        const edit = document.createElement("i");
                        edit.className = "fa-regular fa-pen-to-square bg-green-400 p-1 rounded cursor-pointer h-[20px]";
                        /********** */
                        // edit.textContent = task.id_task;
                        // const task =task.id_task;

                        icon1.appendChild(edit);
                        // icon.appendChild(archive);

                        const anchorElement = document.createElement("a");
                        anchorElement.href = " <?php echo URLROOT . '/tasks/edit_tasks/'; ?>" + task.id_task; // Replace '#' with the actual href value
                        anchorElement.appendChild(icon1);
                        tagElement.appendChild(anchorElement);
                        tagElement.appendChild(anchorElement2);
                        tagElement.appendChild(deadline);
                        $(deadline).appendTo(tagElement);
                        $(tagElement).appendTo('#todo');

                        // $(icon1).appendTo(tagElement);
                        // $(tagElement).appendTo('#todo');
                        edit.addEventListener('click', () => {




                        })






                        // $('<div class="bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter">'+'<p>' + task.titre + '</P>'+'</div>').appendTo('#todo');
                        // // const taskElement = $('<div>').addClass('bg-white p-2 rounded mt-1 border-b border-grey cursor-pointer hover:bg-grey-lighter').text(task.titre);
                        // // todoColumn.append(taskElement);
                    });
                },
                error: function(error) {
                    console.error('Error fetching tasks:', error);
                }
            });
        }
        /******************** */







        /*************************** */

        $('#addTaskButton').click(function() {
            $('#taskForm').removeClass('hidden');
        });

        $('#closeTaskForm').click(function() {
            $('#taskForm').addClass('hidden');
        });

        $('#cancelTask').click(function() {
            $('#taskForm').addClass('hidden');
        });

        fetchTaskstodo();



        /********** */

        // Function to fetch tasks using AJAX with jQuery
        function fetchTasksdoing() {
            // Assuming you have a route that handles task fetching, adjust the URL accordingly
            const fetchUrl = '<?php echo URLROOT . '/tasks/fetch_tasks_doing/' . $data['id_project']; ?>';

            //   console.log(fetchUrl);
            // Make an AJAX request using jQuery
            $.ajax({
                url: fetchUrl,
                type: 'GET',
                dataType: 'json',
                success: function(tasks) {
                    // console.log(tasks);

                    tasks.forEach(task => {
                        const tagElement = document.createElement("div");
                        const icon1 = document.createElement("div");
                        icon1.className = "w-fit flex gap-2"
                        tagElement.className = "bg-white p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        tagElement.textContent = task.titre;
                        const deadline = document.createElement("span");
                        deadline.className = "bg-red-400 p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        deadline.textContent = task.deadline;


                        // const archive = document.createElement("i");
                        // archive.className = "fa-solid fa-box-archive bg-red-400 p-1 rounded cursor-pointer h-[20px]  ";
                        // // archive.textContent = "";
                        const edit = document.createElement("i");
                        edit.className = "fa-regular fa-pen-to-square bg-green-400 p-1 rounded cursor-pointer h-[20px]";
                        // edit.textContent = task.id_task;
                        // const task =task.id_task;

                        icon1.appendChild(edit);
                        // icon.appendChild(archive);

                        const anchorElement = document.createElement("a");
                        anchorElement.href = " <?php echo URLROOT . '/tasks/edit_tasks/'; ?>" + task.id_task; // Replace '#' with the actual href value
                        anchorElement.appendChild(icon1);
                        tagElement.appendChild(anchorElement);
                        tagElement.appendChild(deadline);
                        $(deadline).appendTo(tagElement);
                        $(tagElement).appendTo('#doing');


                        /****************** */
                    });
                },
                error: function(error) {
                    console.error('Error fetching tasks:', error);
                }
            });
        }

        fetchTasksdoing();

        function fetchTasksdone() {
            const fetchUrl = '<?php echo URLROOT . '/tasks/fetch_tasks_done/' . $data['id_project']; ?>';

            //   console.log(fetchUrl);

            $.ajax({
                url: fetchUrl,
                type: 'GET',
                dataType: 'json',
                success: function(tasks) {
                    // console.log(tasks);

                    tasks.forEach(task => {

                        const tagElement = document.createElement("div");
                        const icon1 = document.createElement("div");
                        icon1.className = "w-fit flex gap-2"
                        tagElement.className = "bg-white p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        tagElement.textContent = task.titre;
                        const deadline = document.createElement("span");
                        deadline.className = "bg-red-400 p-2 rounded mt-1 border-b border-grey  hover:bg-grey-lighter flex  justify-between";
                        deadline.textContent = task.deadline;


                        // const archive = document.createElement("i");
                        // archive.className = "fa-solid fa-box-archive bg-red-400 p-1 rounded cursor-pointer h-[20px]  ";
                        // // archive.textContent = "";
                        const edit = document.createElement("i");
                        edit.className = "fa-regular fa-pen-to-square bg-green-400 p-1 rounded cursor-pointer h-[20px]";
                        // edit.textContent = task.id_task;
                        // const task =task.id_task;

                        icon1.appendChild(edit);
                        // icon.appendChild(archive);

                        const anchorElement = document.createElement("a");
                        anchorElement.href = " <?php echo URLROOT . '/tasks/edit_tasks/'; ?>" + task.id_task; // Replace '#' with the actual href value
                        anchorElement.appendChild(icon1);
                        tagElement.appendChild(anchorElement);
                        tagElement.appendChild(deadline);
                        $(deadline).appendTo(tagElement);
                        $(tagElement).appendTo('#done');

                    });
                },
                error: function(error) {
                    console.error('Error fetching tasks:', error);
                }
            });
        }
        fetchTasksdone();



    })
</script>




<?php require APPROOT . '/views/inc/footer.php'; ?>