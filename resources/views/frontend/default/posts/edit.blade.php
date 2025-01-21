<x-app-layout>
    <div class="w-4/5 m-auto text-left">
        <div class="py-14">
            <h1 class="text-6xl">
                {{ ('Update Post') }}: <span class="font-bold">{{ $post->title }}</span>
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto p-20">
        <form action="{{ route('posts.update', $post->slug) }}"
            method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <input type="text"
                name="title"
                value="{{ $post->title }}"
                class="border-b-2 border-l-transparent border-t-transparent border-r-transparent focus:border-l-transparent focus:border-t-transparent focus:border-r-transparent block w-full h-20 text-6xl outline-none bg-transparent">

            <textarea name="excerpt"
                placeholder="{{ __('Excerpt') }}"
                class="border-b-2 border-l-transparent border-t-transparent border-r-transparent focus:border-l-transparent focus:border-t-transparent focus:border-r-transparent block w-full h-60 text-xl outline-none bg-transparent">
                {!! $post->excerpt !!}
            </textarea>

            <textarea name="body"
                      placeholder="{{ __('Post content') }}"
                      class="border-b-2 border-l-transparent border-t-transparent border-r-transparent focus:border-l-transparent focus:border-t-transparent focus:border-r-transparent block w-full h-60 text-xl outline-none bg-transparent">
                {!! $post->body !!}
            </textarea>

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
                {{ __('Submit Your Post') }}
            </button>
        </form>
    </div>
</x-app-layout>
