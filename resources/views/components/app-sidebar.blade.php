{{--   Project sidebar  --}}
<div class="flex-shrink-0 flex flex-col w-24 bg-white shadow-sm">
    {{-- LOGO --}}
    <div class="flex-shrink flex justify-center items-center h-20 bg-white">
        <img class="h-12 w-auto opacity-25" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
             alt="Rico app logo">
    </div>

    {{-- ORGANIZATION AND USER ACTION --}}
    <div class="flex-grow flex flex-col items-center justify-between p-4">
        {{-- TOP CONTENT --}}
        <div class="flex flex-col space-y-6 pt-4">
            <a href="#" class="rounded-full bg-gray-300 w-12 h-12 text-white flex justify-center items-center"></a>
            <a href="#" class="rounded-full bg-gray-300 w-12 h-12 text-white flex justify-center items-center"></a>
            <a href="#" class="rounded-full bg-gray-300 w-12 h-12 text-white flex justify-center items-center"></a>
        </div>

        {{-- BOTTOM CONTENT --}}
        <div class="flex flex-col space-y-4">
            <a href="#" class="w-14 h-14 text-gray-300 flex justify-center items-center" title="{{ __('Create new organization') }}">
                <svg class="flex-none w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 14v6m-3-3h6M6 10h2a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2zm10 0h2a2 2 0 002-2V6a2 2 0 00-2-2h-2a2 2 0 00-2 2v2a2 2 0 002 2zM6 20h2a2 2 0 002-2v-2a2 2 0 00-2-2H6a2 2 0 00-2 2v2a2 2 0 002 2z" />
                </svg>
            </a>
            <a href="#" class="w-14 h-14 text-gray-300 flex justify-center items-center" title="{{ __('Notification') }}">
                <svg class="flex-none w-8 h-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </a>
            <a href="#" class="rounded-full bg-gray-300 w-14 h-14"></a>
        </div>
    </div>
</div>
