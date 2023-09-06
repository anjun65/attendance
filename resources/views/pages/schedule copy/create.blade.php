<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jadwal') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white py-24 sm:py-32">
                   <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
                      
                      <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Tambah Jadwal</h2>
                      </div>
                      <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                        @csrf
                        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                          
                          <div class="sm:col-span-2">
                            <label for="name" class="block text-sm font-semibold leading-6 text-gray-900">Nama</label>
                            <div class="mt-2.5">
                              <input type="text" name="name" id="name" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="classrooms_id" class="block text-sm font-semibold leading-6 text-gray-900">Kelas</label>
                            <div class="relative mt-2.5">
                              
                              <select id="classrooms_id" name="classrooms_id" class="ring-1 ring-inset ring-gray-300 shadow-sm h-full w-full rounded-md border-0 bg-transparent bg-none text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                  <option value="" selected>Pilih Kelas</option>
                                </select>
                              </div>
                          </div>

                          <div class="sm:col-span-2">
                            <label for="material" class="block text-sm font-semibold leading-6 text-gray-900">Materi</label>
                            <div class="mt-2.5">
                              <textarea type="text" name="material" id="material" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                          </div>
                          
                        </div>
                        <div class="mt-10">
                          <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
