<form wire:submit.prevent="register" class="space-y-6">
    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">
            {{ __('Email address') }}
        </label>
        <div class="mt-1">
            <input wire:model="email" id="email" name="email" type="email" autocomplete="email" required placeholder="your.email@email.com"
                   class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <p class="text-xs text-red-500"> @error('email') {{ __($message) }} @enderror</p>
    </div>

    <div class="space-y-1">
        <label for="password" class="block text-sm font-medium text-gray-700">
            {{ __('Password') }}
        </label>
        <div class="mt-1">
            <input wire:model="password" id="password" name="password" type="password" autocomplete="current-password"
                   required placeholder="**********"
                   class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
        <p class="text-xs text-red-500"> @error('password') {{ __($message) }} @enderror</p>
    </div>

    <div>
        <button type="submit"
                class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-md font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Register') }}
        </button>
    </div>
</form>
