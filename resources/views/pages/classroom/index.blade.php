<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Schedules') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            
            <div class="bg-white">
                  <div class="md:px-32 py-8 w-full">
                      <div class="grid grid-cols-2 gap-2">
                        <div>
                          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Kelas</h2>
                          <p class="mt-2 text-lg leading-8 text-gray-600">List Kelas</p>
                        </div>
                        <!-- ... -->
                        <div>
                          <a href="{{ route('classes.create') }}" class="inline-flex items-end justify-end rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            
                            Tambah
                          </a>
                        </div>
                      </div>

                      
                      <div class="shadow overflow-hidden rounded border-b border-gray-200">
                     
                      <table class="min-w-full bg-white mt-5">
                        <thead class="bg-gray-800 text-white">
                          <tr>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">No</th>
                            <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Nama</th>
                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Aksi</th>
                          </tr>
                        </thead>
                      <tbody class="text-gray-700">
                        @foreach ($classrooms as $classroom)
                          <tr>
                            <td class="w-1/3 text-left py-3 px-4">{{ $classroom->id }}</td>
                            <td class="w-1/3 text-left py-3 px-4">{{ $classroom->name }}</td>
                            <td class="text-left py-3 px-4">
                              <a href="{{ route('classes.edit', $classroom->id) }}" class="inline-flex items-end justify-end rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

                                Edit
                              </a>
                              
                              <form action="{{  route('classes.destroy', $classroom->id) }}" method="POST">
                                  @method('DELETE')
                                  @csrf   
                                  <button type="submit" class="inline-flex items-end justify-end rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                      Hapus
                                  </button>
                              </form>
                            </td>
                          </tr>
                        @endforeach                        
                      </tbody>
                      </table>
                    </div>
                  </div>
                  
                </div>
        </div>
    </div>
</x-app-layout>
