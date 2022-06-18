<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(session()->has('status'))
                    <div class=" mt-5 shadow font-blod py-2 px-4 rounded">
                      {{session('status')}}
                    </div>
                @endif
                    <h3>Show All Post</h3>
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide- divide-gray-400">
                                        <thead class="bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium
                                                text-gray-100 uppercase tracking-wider">Name
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium
                                                text-gray-100 uppercase tracking-wider">Title
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium
                                                text-gray-100 uppercase tracking-wider">Body
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium
                                                text-gray-100 uppercase tracking-wider">Action
                                                </th>   
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-600  divide- divide-gray-500">
                                            @foreach ($post as $post)
                                             <tr>
                                                <td class="px-6 py-4 text-sm whitespace-nowrap">
                                                    {{$post->user->name}}
                                                </td>
                                                <td class="px-6 py-4 text-sm whitespace-nowrap">
                                                    {{$post->title}}
                                                </td>
                                                <td class="px-6 py-4 text-sm whitespace-nowrap">
                                                    {{$post->body}}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <a href="{{url('/post/edit', $post->id)}}" class="bg-purple-500 hover:bg-purple-400
                                                    focus:outline-none text-sm py-1 px-2 rounded ml-5">Edit</a>
                                                    <a href="" class="bg-purple-500 hover:bg-purple-400
                                                    focus:outline-none text-sm py-1 px-2 rounded ml-5">Delete</a>
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
            </div>
        </div>
    </div>
</x-app-layout>
