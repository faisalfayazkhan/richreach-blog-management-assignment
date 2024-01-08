<div x-data="{ open: false }">
    <button @click="open = true" class="text-sm cursor-pointer"
        style="float:right;background-color:rgba(255, 0, 0, 0.582);color:white;padding:0.375rem 0.625rem;border-radius:0.375rem;">
        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14"
            viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path
                d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.7 23.7 0 0 0 -21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0 -16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z" />
        </svg>
    </button>
    <div x-show="open" class="fixed inset-0 bg-gray-700 bg-opacity-50 flex items-center justify-center">
        <div class="bg-white p-6 rounded shadow-md">
            <p class="mb-4">Are you sure you want to delete this blog post?</p>
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="flex justify-end">
                    <button type="button" @click="open = false" class="mr-2 px-4 py-2 text-white rounded"
                        style="background: grey;margin-right:10px;">Cancel</button>
                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
