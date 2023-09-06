<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white py-24 sm:py-32">
                
                  <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
                    <div class="max-w-2xl">
                      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">User</h2>
                      <p class="mt-2 text-lg leading-8 text-gray-600">List User</p>
                    </div>
                    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                      @foreach ($users as $user)
                          <li>
                            <a href="{{ route('users.edit', $user->id ) }}">
                                <div class="flex items-center gap-x-6">
                                  <img class="h-16 w-16 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                  <div>
                                    <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">{{ $user->name }}</h3>
                                    <p class="text-sm font-semibold leading-6 text-indigo-600">{{ $user->roles }}</p>
                                  </div>
                                </div>
                            </a>
                            
                          </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
