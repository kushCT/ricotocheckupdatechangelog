<form action="#" method="POST" class="space-y-6">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">
            {{ __('Email address') }}
        </label>
        <div class="mt-1">
            <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required placeholder="your.name@email.com"
                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </div>

    <div class="space-y-1">
        <label for="password" class="block text-sm font-medium text-gray-700">
            {{ __('Password') }}
        </label>
        <div class="mt-1">
            <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password"
                   required placeholder="password"
                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </div>

    <div class="flex items-center justify-between">
        <div class="flex items-center">
            <input id="remember_me" name="remember_me" type="checkbox"
                   class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                {{ __('Remember me') }}
            </label>
        </div>
    </div>

    <div>
        <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-md tracking-wide font-medium text-black bg-yellow-300 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Login') }}
        </button>
    </div>

    <div class="text-sm text-center">
        <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
            {{ __('Forgot your password?') }}
        </a>
    </div>
</form>
