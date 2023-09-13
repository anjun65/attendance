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
                   <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
                      <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
                        <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
                      </div>
                      <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Edit User</h2>
                      </div>
                      <form action="{{ route('users.update', $user->id ) }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                        @method('PUT')
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                          
                          <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
                            <div class="mt-2.5">
                              <input type="text" name="name" value="{{ $user->name }}" id="name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>
                          
                          <div class="sm:col-span-2">
                            <label for="roles" class="block text-sm font-semibold leading-6 text-gray-900">Roles</label>
                            <div class="relative mt-2.5">
                              
                              <select id="roles" name="roles" class="ring-1 ring-inset ring-gray-300 shadow-sm h-full w-full rounded-md border-0 bg-transparent bg-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                  <option class="text-gray-900" value="" selected>Pilih roles</option>
                                  <option class="text-gray-900" value="Siswa">Siswa</option>
                                  <option class="text-gray-900" value="Guru">Guru</option>
                                  <option class="text-gray-900" value="Admin">Admin</option>
                                </select>
                              </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="classrooms_id" class="block text-sm font-semibold leading-6 text-gray-900">Kelas</label>
                            <div class="relative mt-2.5">
                              
                              <select id="classrooms_id" name="classrooms_id" class="ring-1 ring-inset ring-gray-300 shadow-sm h-full w-full rounded-md border-0 bg-transparent bg-none focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                  <option value="" selected>Pilih Kelas</option>

                                  @foreach ($classes as $class)
                                      <option class="text-gray-900" value="{{ $class->id }}" selected>{{ $class->name }}</option>
                                  @endforeach
                                </select>
                              </div>
                          </div>
                          
                        </div>
                        <div class="mt-10">
                          <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
