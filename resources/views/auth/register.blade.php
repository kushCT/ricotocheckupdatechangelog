<x-guest-layout>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="Workflow">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        {{ __('Create new account') }}
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
                        @livewire('register-form')
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
