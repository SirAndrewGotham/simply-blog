<x-app-layout>
    <div class="w-4/5 m-auto text-left">
        <div class="py-14">
            <h1 class="text-6xl">
                Create New Post
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto p-20">
        <form action="{{ route('posts.store') }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf

            <input type="text"
                name="title"
                placeholder="{{ __('Title') }}"
                class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

            <textarea name="excerpt"
                placeholder="{{ __('Excerpt') }}"
                class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>

            <textarea name="body"
                      placeholder="{{ __('Post content') }}"
                      class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
            <div class="bg-gray-lighter pt-14">
                <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                    <span class="mt-2 text-base leading-normal">
                        {{ __('Select a file') }}
                    </span>
                    <input type="file"
                        name="image"
                        class="hidden">
                </label>
            </div>
            <button
                type="submit"
                class="uppercase mt-14 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                {{ __('Submit post') }}
            </button>
        </form>
    </div>
</x-app-layout>
