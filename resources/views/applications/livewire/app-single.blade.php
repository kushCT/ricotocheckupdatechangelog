{{--<li class="col-span-1 flex shadow-sm rounded-md bg-white">
    <div class="flex-shrink-0 flex items-center justify-center w-16 bg-pink-600 text-white text-sm font-medium rounded-l-md">
        {{ $app->getInitials(2) }}
    </div>
    <div class="flex-1 flex items-center justify-between border-t border-r border-b border-gray-200 bg-white rounded-r-md truncate">
        <div class="flex-1 px-4 py-2 text-sm truncate">
            <a href="#" class="text-gray-900 font-medium hover:text-gray-600">{{ $app->name }}</a>
            <p class="text-gray-500">{{ $app->countMember() .' '. __('Members')}}</p>
        </div>
        <div class="flex-shrink-0 pr-2">
            <button class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Open options</span>
                <!-- Heroicon name: dots-vertical -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                </svg>
            </button>
        </div>
    </div>
</li>--}}

<li class="col-span-1 flex bg-white shadow-sm rounded-md py-4">
    <div class="w-24  flex justify-center">
        <span class="bg-black w-12 h-12 rounded-full flex items-center justify-center text-white">
            {{ $app->getInitials(2) }}
        </span>
    </div>
    <div class="flex-1 flex truncate">
        <div class="flex-1 px-2 truncate">
            <a href="#" class="text-gray-900 text-lg font-medium hover:text-gray-600">{{ $app->name }}</a>
            <p class="text-gray-500 text-xs">{{ $app->created_at->format('d-m-Y H:i:s') }}</p>
            <div class="flex -space-x-2 relative z-0 overflow-hidden pt-3 pb-2">
                <img class="relative z-30 inline-block h-8 w-8 rounded-full border-2 border-white shadow" src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <img class="relative z-20 inline-block h-8 w-8 rounded-full border-2 border-white shadow" src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-1.2.1&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                <img class="relative z-10 inline-block h-8 w-8 rounded-full border-2 border-white shadow" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt="">
                <img class="relative z-0 inline-block h-8 w-8 rounded-full border-2 border-white shadow" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
            </div>
        </div>
        <div class="flex-shrink-0 pr-2">
            <button class="w-8 h-8 bg-white inline-flex items-center justify-center text-gray-400 rounded-full bg-transparent hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <span class="sr-only">Open options</span>
                <!-- Heroicon name: dots-vertical -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                </svg>
            </button>
        </div>
    </div>
</li>

