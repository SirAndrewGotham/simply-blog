<section class="bg-gray-100 dark:bg-gray-900 py-8 lg:py-16 antialiased">
    <div class="max-w-2xl mx-auto px-4">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">
                @unless($comments->count())
                    {{ __('Discussion has not been started yet,') }}<br />{{ __('be the first one to comment.') }}
                @else
                    {{ __('Discussions') }} ({{ $comments->count() }})
                @endunless
            </h2>
        </div>
        <form class="mb-6" action="{{ route('comments.store') }}" method="POST">
            @csrf
            <div
                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                <label for="comment" class="sr-only">{{ __('Your comment') }}</label>
                <textarea id="comment" rows="6"
                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                          placeholder="{{ __('Write your comment...') }}" required></textarea>
            </div>
            <div class="text-right">
                <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-gray-800 bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                            {{ __('Post') }}
                </button>
            </div>
        </form>
        <x-comment :comments="$comments"/>
    </div>
</section>
