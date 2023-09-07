
<div class="fixed z-50 w-full md:w-[768px] h-16 -translate-x-1/2 border border-gray-200 rounded-full bottom-4 left-1/2 bg-zinc-800 dark:border-zinc-600">
    <div class="grid h-full max-w-lg grid-cols-4 mx-auto">
        <a href="/" data-tooltip-target="tooltip-home" class="inline-flex flex-col items-center justify-center px-5 rounded-l-full tighthover:bg-gray-800 dark:hover:bg-gray-800 group">
            <div class="mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500 text-[24px]">
                <i class="fas fa-home"></i>
            </div>
            <span class="sr-only">Home</span>
        </a>
        <div id="tooltip-home" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Home
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/game" data-tooltip-target="tooltip-settings" class="inline-flex flex-col items-center justify-center px-5 tighthover:bg-gray-800 dark:hover:bg-gray-800 group">
            <div class="mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500 text-[24px]">
                <i class="fas fa-gamepad"></i>
            </div>
            <span class="sr-only">Settings</span>
        </a>
        <div id="tooltip-wallet" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Game
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/wallet"  data-tooltip-target="tooltip-settings" class="inline-flex flex-col items-center justify-center px-5 tighthover:bg-gray-800 dark:hover:bg-gray-800 group">
            <div class="mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500 text-[24px]">
                <i class="fa fa-wallet" aria-hidden="true"></i>
            </div>
            <span class="sr-only">Settings</span>
        </a>
        <div id="tooltip-settings" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Wallet
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <a href="/users" data-tooltip-target="tooltip-profile" class="inline-flex flex-col items-center justify-center px-5 rounded-r-full tighthover:bg-gray-800 dark:hover:bg-gray-800 group">
            <div class="mb-1 text-gray-500 dark:text-gray-400 group-hover:text-blue-600 dark:group-hover:text-blue-500 text-[24px]">
                <i class="far fa-user-circle"></i>
            </div>
            <span class="sr-only">Profile</span>
        </a>
        <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Profile
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
</div>
