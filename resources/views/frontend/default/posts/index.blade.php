<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">
                Blog Posts
            </h1>
        </div>
    </div>

    @if(auth()->check())
        <div class="pt-14 w-4/5 m-auto flex justify-end">
            <a href="{{ route('posts.create') }}" class="bg-blue-500 uppercase text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                Add new post
            </a>
        </div>
    @endif

    @foreach($posts as $post)
        <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-14 border-b border-gray-200">
            <div>
                <img src="/assets/frontend/default/images/laptop-1.jpg" width="700" alt=""/>
            </div>
            <div>
                <h2 class="text-gray-700 font-bold text-5xl pb-4">
                    {{ $post->title }}
                </h2>
                <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, {{ $post->updated_at->diffForHumans() }}
            </span>
                <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
                    {{ $post->excerpt }}
                </p>
                <a href="{{ route('posts.show', $post->slug) }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                    {{ __('Read more') }}
                </a>
            </div>
        </div>
    @endforeach
    <div class="pagination w-4/5 m-auto text-center pt-4">
        {!! $posts->links() !!}
    </div>
</x-app-layout>
