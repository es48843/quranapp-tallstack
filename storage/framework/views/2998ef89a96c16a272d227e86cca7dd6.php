<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="duration-200 p-4 sm:ml-48"
         :class="{ ' sm:ml-6 sm:pl-12 z-10': !expandedSideBar ,  ' sm:ml-20 sm:pl-16 md:pl-24 z-10': expandedSideBar}"
    >
        <div class="p-4 my-14">
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <div class="sm:px-6 w-full">
                <div class="px-4 md:px-10 py-4 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 dark:text-white">Users</p>
                        <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 dark:text-gray-200  bg-gray-200 dark:bg-gray-800  hover:bg-gray-300   dark:hover:bg-gray-700  cursor-pointer rounded">
                            <p>Sort By:</p>
                            <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                                <option class="text-sm text-indigo-800">Latest</option>
                                <option class="text-sm text-indigo-800">Oldest</option>
                                <option class="text-sm text-indigo-800">Latest</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-white dark:bg-gray-900  py-4 md:py-7 px-4 md:px-8 xl:px-10">
                    <div class="sm:flex items-center justify-between">
                        <div class="flex-1 pr-4">
                            <div class="relative md:w-1/3">
                                <input type="search"
                                       class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                                       placeholder="Search">
                                <div class="absolute top-0 left-0 inline-flex items-center p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" viewBox="0 0 24 24"
                                         stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                                        <circle cx="10" cy="10" r="7" />
                                        <line x1="21" y1="21" x2="15" y2="15" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex items-center mr-6">
                            <a class="rounded-full focus:outline-none focus:ring-2  focus:bg-indigo-50 focus:ring-indigo-800" href=" javascript:void(0)">
                                <div class="py-2 px-8 bg-indigo-100 text-indigo-700 rounded-full">
                                    <p>All</p>
                                </div>
                            </a>
                            <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4" href="javascript:void(0)">
                                <div class="py-2 px-8 text-gray-600 dark:text-gray-200  hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                    <p>Done</p>
                                </div>
                            </a>
                            <a class="rounded-full focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 ml-4" href="javascript:void(0)">
                                <div class="py-2 px-8 text-gray-600 dark:text-gray-200  hover:text-indigo-700 hover:bg-indigo-100 rounded-full ">
                                    <p>Pending</p>
                                </div>
                            </a>
                        </div>
                        <button class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white">Add Users</p>
                        </button>

                    </div>
                    <div class="mt-7 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>
                            <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 dark:border-gray-600  rounded">
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="text-base font-medium leading-none text-gray-700 dark:text-white  mr-2">
                                                <?php echo e($user->name); ?>

                                            </p>
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg1.svg" alt="clip">
                                        </div>
                                    </td>
                                    <td class="pl-24">
                                        <div class="flex items-center">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg" alt="tag">
                                            <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">
                                                <?php echo e($user->email); ?>

                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg" alt="list">
                                            <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">
                                                <?php echo e($user->created_at); ?>


                                            </p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg4.svg" alt="chat">
                                            <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">23</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg" alt="paper clip">
                                            <p class="text-sm leading-none text-gray-600 dark:text-gray-200  ml-2">04/07</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <button class="py-3 px-3 text-sm focus:outline-none leading-none text-red-700 bg-red-100 rounded">Due today at 18:00</button>
                                    </td>
                                    <td class="pl-4">
                                        <button class="focus:ring-2 focus:ring-offset-2 focus:ring-red-300 text-sm leading-none text-gray-600 dark:text-gray-200  py-3 px-5 bg-gray-100 rounded hover:bg-gray-200 dark:hover:bg-gray-700   dark:bg-gray-800  focus:outline-none">View</button>
                                    </td>
                                    <td>
                                        <div class="relative px-5 pt-2">
                                            <button class="focus:ring-2 rounded-md focus:outline-none" onclick="dropdownFunction(this)" role="button" aria-label="option">
                                                <img class="dropbtn" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg6.svg" alt="dropdown">
                                            </button>
                                            <div class="dropdown-content bg-white shadow w-24 absolute z-30 right-0 mr-6 target hidden">
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <p>Edit</p>
                                                </div>
                                                <div tabindex="0" class="focus:outline-none focus:text-indigo-600 text-xs w-full hover:bg-indigo-700 py-4 px-4 cursor-pointer hover:text-white">
                                                    <p>Delete</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr tabindex="0" class="focus:outline-none h-16 border border-gray-100 dark:border-gray-600  rounded">
                                    <td>
                                        <div class="flex items-center justify-center pl-5">
                                            <p class="text-base font-medium leading-none text-gray-700 dark:text-white  mr-2">
                                                No users found
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?>
                            <tr class="h-3"></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <script>
                function dropdownFunction(element) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    let list = element.parentElement.parentElement.getElementsByClassName("dropdown-content")[0];
                    list.classList.add("target");
                    for (i = 0; i < dropdowns.length; i++) {
                        if (!dropdowns[i].classList.contains("target")) {
                            dropdowns[i].classList.add("hidden");
                        }
                    }
                    list.classList.toggle("hidden");
                }
            </script>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH /home/enessh/Desktop/projects/quranapp-tallstack/resources/views/livewire/user-list.blade.php ENDPATH**/ ?>