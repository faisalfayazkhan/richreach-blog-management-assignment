<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modify Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('posts.update', $post->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                            <input type="text" name="title" id="title"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:border-blue-500"
                                required value="{{ old('title', $post->title) }}">
                            @error('title')
                                <p class="text-xs italic" style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="content" class="block text-gray-700 text-sm font-bold mb-2">Content:</label>
                            <textarea name="content" id="content" rows="4"
                                class="w-full border rounded px-3 py-2 focus:outline-none focus:border-blue-500" required>{{ old('content', $post->content) }}</textarea>
                            @error('content')
                                <p class="text-xs italic" style="color: red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <button type="submit"
                                style="background-color:#4f46e5;color:white;padding:0.375rem 0.625rem;border-radius:0.375rem;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
