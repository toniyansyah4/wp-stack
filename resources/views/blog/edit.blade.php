<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('blog.update', $blogs->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        {{-- form input blog with tiny mce --}}
                        <div class="flex flex-col">
                            <label for="title" class="text-lg">Title</label>
                            <input type="text" name="title" id="title" value={{ $blogs->title }}
                                class="border-2 rounded-md p-2">
                        </div>
                        <div class="flex flex-col mt-4">
                            <label for="content" class="text-lg">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="border-2 rounded-md p-2">{{ $blogs->content }}</textarea>
                        </div>
                        <div class="flex flex-col mt-4">
                            <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update
                                Blog</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    tinymce.init({
        selector: '#content'
    });
</script>
