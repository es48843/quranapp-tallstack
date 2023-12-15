<aside id="sidebarNavDraw" class="flex fixed top-0 left-0 z-40 w-auto h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto dark:bg-gray-800 pt-20 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <ul class="space-y-2 font-medium" >
            <li>
                <a href="<?php echo e(route('dashboard')); ?>" wire:navigate class="<?php if(Request::segment(1) === 'dashboard'): ?> bg-primary-soft dark:bg-gray-750 <?php endif; ?> flex items-center p-2 text-sm text-gray-500 dark:text-gray-300 rounded-lg hover:text-primary dark:hover:text-primary hover:bg-primary-soft dark:hover:bg-gray-750"
                   data-tooltip-target="tooltip-lessons" data-tooltip-placement="right"
                >
                    <div class="flex justify-center items-center h-8 w-8">
                        <i class="fa-brands fa-leanpub fa-lg"></i>
                    </div>
                    <span
                        :class="{ ' hidden': !expandedSideBar ,  ' block': expandedSideBar}" class="ml-3 pr-4 hidden" >
                        Mësimet
                    </span>
                </a>
                <div
                    :class="{ ' block': !expandedSideBar ,  ' hidden': expandedSideBar}"
                    id="tooltip-lessons" role="tooltip" class="hidden absolute z-10 invisible px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-900 whitespace-nowrap"
                >
                    Mësimet
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </li>
            <li>
                <a href="<?php echo e(route('users.render')); ?>" wire:navigate class="<?php if(Request::is('users')): ?> bg-primary-soft dark:bg-gray-750 <?php endif; ?> flex items-center p-2 text-sm text-gray-500 dark:text-gray-300 rounded-lg hover:text-primary dark:hover:text-primary hover:bg-primary-soft dark:hover:bg-gray-750"
                   data-tooltip-target="tooltip-hadithe" data-tooltip-placement="right"
                >
                    <div class="flex justify-center items-center h-8 w-8">
                        <i class="fa-solid fa-book-quran fa-lg"></i>
                    </div>
                    <span
                        :class="{ ' hidden': !expandedSideBar ,  ' block': expandedSideBar}" class="mx-3 hidden">
                        Hadithe
                    </span>
                </a>
                <div
                    :class="{ ' block': !expandedSideBar ,  ' hidden': expandedSideBar}"
                    id="tooltip-hadithe" role="tooltip" class="hidden absolute z-10 invisible px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-900 whitespace-nowrap"
                >
                    Hadithe
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </li>
        </ul>
    </div>
    <?php if(Request::segment(1) === 'dashboard'): ?>
        <?php echo $__env->make('layouts.lessons', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
</aside>
<?php /**PATH /home/enessh/Desktop/projects/quranapp-tallstack/resources/views/layouts/sidebar.blade.php ENDPATH**/ ?>