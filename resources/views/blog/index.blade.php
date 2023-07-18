<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-900">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="flex justify-between">
                        <div class="text-2xl font-bold">List Of Blog</div>
                        <a href="{{ route('blog.create') }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create
                            Blog</a>
                    </div>
                    <div class="flex flex-col mt-4">
                        @foreach ($blogs as $blog)
                            <div class="flex flex-col bg-white shadow-md rounded-md p-4 mt-4">
                                <div class="flex justify-between">
                                    <div class="font-bold text-xl">{{ $blog->title }}</div>
                                    {{-- content --}}

                                    <div class="text-gray-500">{{ $blog->content }}</div>
                                    {{-- content --}}
                                    <div class="flex px-4">
                                        <a href="{{ route('blog.edit', $blog->id) }}"
                                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 mx-2 rounded">Edit</a>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="text-gray-500">{{ $blog->description }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
