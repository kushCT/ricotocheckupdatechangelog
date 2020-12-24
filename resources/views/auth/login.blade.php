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
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    {{ __('Email address') }}
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required placeholder="your.name@email.com"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                @error('email') {{ $message }} @enderror
                            </div>

                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    {{ __('Password') }}
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="current-password"
                                           required placeholder="**********"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                @error('password') {{ $message }} @enderror
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
