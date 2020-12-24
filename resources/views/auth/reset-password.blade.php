<x-guest-layout>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="Workflow">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        {{ __('Change password') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600 max-w">
                        {{ __('Already registered?') }}
                        <a href="{{ route('login') }}"
                           class="font-medium text-indigo-600 hover:text-indigo-500"
                           lang="{{ str_replace('_', '-', app()->getLocale()) }}"
                           title="{{ __('login') }}">
                            {{ __('Sign into existing account.') }}
                        </a>
                    </p>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    {{ __('Email address') }}
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" value="{{ request()->email }}"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                           disabled>
                                </div>
                                @error('email') {{ $message }} @enderror
                            </div>

                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    {{ __('Password') }}
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password"
                                           autocomplete="current-password"
                                           required placeholder="**********"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                @error('password') {{ $message }} @enderror
                            </div>

                            <div class="space-y-1">
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                                    {{ __('Password confirmation') }}
                                </label>
                                <div class="mt-1">
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                           required placeholder="**********"
                                           class="appearance-none block w-full px-3 py-3 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                </div>
                                @error('password') {{ $message }} @enderror
                            </div>

                            <input type="hidden" name="token" value="{{ request()->route('token') }}">
                            <input type="hidden" name="email" value="{{ request()->email }}">

                            <div>
                                <button type="submit"
                                        class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-md tracking-wide font-medium text-black bg-yellow-300 hover:bg-yellow-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Request password reset') }}
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
                 alt="register cover">
        </div>
    </div>
</x-guest-layout>
