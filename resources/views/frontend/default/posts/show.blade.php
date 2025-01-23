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
    <hr />
    <h4>Display Comments</h4>
    @include('frontend.default.posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
    <hr />
    <h4>Add comment</h4>
    <form method="post" action="{{ route('comments.store'   ) }}">
        @csrf
        <div class="form-group">
            <textarea class="form-control" name="body"></textarea>
            <input type="hidden" name="post_id" value="{{ $post->id }}" />
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success" value="Add Comment" />
        </div>
    </form>
</x-app-layout>
