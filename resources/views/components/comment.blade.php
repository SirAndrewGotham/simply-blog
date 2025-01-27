<section class="bg-gray-100 dark:bg-gray-900 py-8 lg:py-4 antialiased">
    <div class="max-w-2xl mx-auto px-4">
        @foreach($comments as $comment)
            {{-- Comment --}}
            <comment @if($comment->parent_id != null) class="p-6 text-base bg-white rounded-lg dark:bg-gray-900 border-b-2 border-r-2 border-gray-200 sm:rounded-lg sm:shadow-sm"
                     @else class="p-6 mb-3 ml-6 lg:ml-12 text-base" @endif >
                <div class="flex justify-between items-center mb-2">
                    <div class="flex items-center">
                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white font-semibold">
                            <img
                                class="mr-2 w-6 h-6 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt="Michael Gough">{{ $comment->user->name }}</p>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            <time pubdate datetime="{{ $comment->updated_at->format('d-m-Y') }}"
                                  title="{{ $comment->updated_at->format('j F, Y') }}">{{ $comment->updated_at->format('j F, Y') }}
                            </time>
                        </p>
                    </div>
                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-500 dark:text-gray-400 bg-gray-100 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                             fill="currentColor" viewBox="0 0 16 3">
                            <path
                                d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
                        </svg>
                        <span class="sr-only">{{ __('Comment settings') }}</span>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownComment1"
                         class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Edit') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Remove') }}</a>
                            </li>
                            <li>
                                <a href="#"
                                   class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ __('Report') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <p class="text-gray-500 dark:text-gray-400">{!! $comment->body !!}</p>
                <div x-init="" x-data="{reply: false}" class="flex items-center mt-4 space-x-4">
                    <div x-show="!reply" @click="reply = !reply">
                        <button type="button"
                                class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400 font-medium">
                            <svg class="mr-1.5 w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                 fill="none" viewBox="0 0 20 18">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M5 5h5M5 8h2m6-3h2m-5 3h6m2-7H2a1 1 0 0 0-1 1v9a1 1 0 0 0 1 1h3v5l5-5h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1Z"/>
                            </svg>
                            {{ __('Reply') }}
                        </button>
                    </div>
                    <div x-show="reply" @click.outside="reply = !reply" class="w-full">
                        <form class="mb-6" action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <div
                                class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                                <label for="comment" class="sr-only">{{ __('Your comment') }}</label>
                                <textarea id="comment" rows="6"
                                          class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                                          placeholder="{{ __('Write a reply...') }}" required></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit"
                                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-gray-800 bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                    {{ __('Post') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @if($comment->replies)
                    <x-comment :comments="$comment->replies"/>
                @endif
            </comment>
        @endforeach
    </div>
</section>
