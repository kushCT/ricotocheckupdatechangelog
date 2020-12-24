<x-guest-layout>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="Rico app logo">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900 leading-tight">
                        {{ __('Sign in to your account') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600 max-w">
                        {{ __('Not registered?') }}
                        <a href="{{ route('register') }}"
                           class="font-medium text-indigo-600 hover:text-indigo-500"
                           lang="{{ str_replace('_', '-', app()->getLocale()) }}"
                           title="{{ __('register') }}">
                            {{ __('Sign up for a new account.') }}
                        </a>
                    </p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form action="" method="post" class="space-y-6">
                            @csrf
                            <div>
                                <label for="code" class="block text-sm font-medium text-gray-700">
                                    {{ __('Code') }}
                                </label>
                                <div class="mt-1">
                                    <input id="code" name="code" type="email" required placeholder="6-digits"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                @error('code') {{ $message }} @enderror
                            </div>
                            <div>
                                <button type="submit"
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-md tracking-wide font-medium text-black bg-yellow-300 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Continue') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover"
                 src="https://images.unsplash.com/photo-1502239608882-93b729c6af43?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2850&q=80"
                 alt="login cover">
        </div>
    </div>

</x-guest-layout>
