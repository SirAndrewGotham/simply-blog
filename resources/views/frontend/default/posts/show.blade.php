<x-app-layout>
    <div class="w-4/5 m-auto text-center">
        <div class="py-14 border-b border-gray-200">
            <h1 class="text-6xl">
                {{ $post->title }}
            </h1>
        </div>
    </div>

    <div class="w-4/5 m-auto pt-20">
        <span class="text-gray-500">
            {{ __('By') }} <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, {{ __('Created') }} {{ $post->updated_at->diffForHumans() }}
        </span>
        <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
            {!! $post->body !!}
        </p>
    </div>
</x-app-layout>
