<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Blogs') }}<a href="{{ route('posts.create') }}" class="text-sm"
                style="float:right;background-color:#4f46e5;color:white;padding:0.375rem 0.625rem;border-radius:0.375rem;">
                Add Blog
            </a>
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session('success'))
                    <div class="text-white p-4 mb-4 rounded" style="background: #6ec6e9;">
                        <p>{{ session('success') }}</p>
                    </div>
                @endif
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full divide-y divide-gray-200 border" style="width: 100%">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider border"
                                    style="text-align: left;">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider border"
                                    style="text-align: left;">
                                    Title
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider border"
                                    style="text-align: left;">
                                    Content
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider border"
                                    style="text-align: left;">
                                    Modify
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 font-medium text-gray-500 uppercase tracking-wider border"
                                    style="text-align: left;">
                                    Delete
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($posts as $post)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap border">
                                        <div class="text-sm font-medium text-gray-900">{{ $loop->iteration }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap border">
                                        <div class="text-sm font-medium text-gray-900">{{ $post->title }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap border">
                                        <div class="text-sm text-gray-500">{{ $post->content }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap border">
                                        <div class="text-sm">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="text-sm"
                                                style="float:right;background-color:#4f46e5;color:white;padding:0.375rem 0.625rem;border-radius:0.375rem;">
                                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="18"
                                                    viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                                    <path
                                                        d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap border">
                                        @include('posts.delete-modal', [
                                            'modalId' => 'post' . $loop->iteration,
                                        ])
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-4 whitespace-nowrap">
                                        No posts created by the user!
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
