<x-guest-layout>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                         alt="Workflow">
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        {{ __('Get Your Trial Today') }}
                    </h2>
                </div>

                <div class="mt-8">
                    <div>
                        <div>
                            <p class="text-sm font-medium text-gray-700">
                                {{ __('Sign up with') }}
                            </p>

                            <div class="mt-1 grid grid-cols-2 gap-2">
                                <div>
                                    <a href="#" title="{{ __('Sign up with Gmail') }}"
                                       lang="{{ str_replace('_', '-', app()->getLocale()) }}"
                                       class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">{{ __('Sign up with Gmail') }}</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>

                                <div>
                                    <a href="#" title="{{ __('Sign up with GitHub') }}"
                                       lang="{{ str_replace('_', '-', app()->getLocale()) }}"
                                       class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                        <span class="sr-only">{{ __('Sign up with GitHub') }}</span>
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                                  clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-6 relative">
                            <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                <div class="w-full border-t border-gray-300"></div>
                            </div>
                            <div class="relative flex justify-center text-sm">
                              <span class="px-2 bg-white text-gray-500">
                                {{ __('Or continue with') }}
                              </span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        @livewire('register-form')
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
