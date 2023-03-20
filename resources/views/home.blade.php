<x-app-layout>
    <div class="flex w-full overflow-hidden">
        <!-- Main section -->
        <div class="w-3/5">
            <!-- Stories -->
            <div class="border border-gray-300 bg-white py-2 px-3">
                <ul class="scrollbar-hide flex w-full space-x-3 overflow-x-auto overflow-y-hidden">
                    @foreach (range(1, 16) as $n)
                        <li
                            class="flex h-14 w-14 flex-none rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[3px]">
                            <img class="h-full w-full rounded-full bg-white p-[3px]"
                                src="{{ 'https://i.pravatar.cc/300?u=' . Str::random(8) }}"
                                alt="{{ $n }}">
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--/. Stories -->

            <!-- Post listing -->
            <div class="mt-4">
                <ul class="space-y-4" role="list">
                    @foreach (range(1, 5) as $n)
                        <li class="bg-white">
                            <article>
                                <div>
                                    <!-- Post header -->
                                    <div
                                        class="flex justify-between space-x-3 border-x border-t py-2 px-3">
                                        <div
                                            class="flex h-10 w-10 flex-none rounded-full bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 p-[2px]">
                                            <img class="h-full w-full rounded-full bg-white p-[2px]"
                                                src="{{ 'https://i.pravatar.cc/300?u=' . $n }}"
                                                alt="{{ $n }}">
                                        </div>

                                        <div class="flex flex-shrink-0 self-center">
                                            <div class="relative inline-block text-left">
                                                <div>
                                                    <button
                                                        class="-m-2 flex items-center rounded-full p-2 text-gray-600 hover:text-gray-400"
                                                        type="button">
                                                        <span class="sr-only">Open options</span>
                                                        <svg class="h-5 w-5" aria-hidden="true"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <path
                                                                d="M12 13.6549C12.8284 13.6549 13.5 12.9834 13.5 12.1549C13.5 11.3265 12.8284 10.6549 12 10.6549C11.1716 10.6549 10.5 11.3265 10.5 12.1549C10.5 12.9834 11.1716 13.6549 12 13.6549Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M6.5 13.6549C7.32843 13.6549 8 12.9834 8 12.1549C8 11.3265 7.32843 10.6549 6.5 10.6549C5.67157 10.6549 5 11.3265 5 12.1549C5 12.9834 5.67157 13.6549 6.5 13.6549Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M17.5 13.6549C18.3284 13.6549 19 12.9834 19 12.1549C19 11.3265 18.3284 10.6549 17.5 10.6549C16.6716 10.6549 16 11.3265 16 12.1549C16 12.9834 16.6716 13.6549 17.5 13.6549Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/. Post header -->

                                    <!-- Post image -->
                                    <div>
                                        <img class="h-64 w-full object-cover object-center"
                                            src="{{ 'https://source.unsplash.com/random?q=80&h=256&w=672?ixid=' . Str::random(8) }}"
                                            alt="">
                                    </div>
                                    <!--/. Post image -->

                                    <!-- Post content -->
                                    <div class="border-x border-gray-300 p-3">
                                        <!-- Post content > actions -->
                                        <div class="flex justify-between">
                                            <div class="flex space-x-4">
                                                <!-- Post content > actions > like post -->
                                                <span class="inline-flex items-center text-sm">
                                                    <button
                                                        class="inline-flex space-x-2 text-gray-900 hover:text-gray-500"
                                                        type="button">
                                                        <svg class="h-4 w-4" aria-hidden="true"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <path
                                                                d="M17.3 3.20493C20.15 3.20493 22.5 5.80493 22.5 8.95493C22.5 12.3549 19.55 14.4549 16.75 16.9549C13.95 19.4549 12.5 20.8049 12 21.1049C11.45 20.7549 9.65 19.1049 7.25 16.9549C4.4 14.4549 1.5 12.3549 1.5 8.95493C1.5 5.80493 3.85 3.20493 6.7 3.20493C8.8 3.20493 9.95 4.20493 10.75 5.35493C11.7 6.65493 11.85 7.30493 12 7.30493C12.15 7.30493 12.3 6.65493 13.25 5.35493C14.05 4.20493 15.2 3.20493 17.3 3.20493ZM17.3 1.70493C15.05 1.70493 13.35 2.60493 12 4.50493C10.65 2.65493 8.95 1.75493 6.7 1.75493C3 1.70493 0 4.95493 0 8.95493C0 12.6049 2.7 14.9549 5.3 17.2049C5.6 17.4549 5.95 17.7549 6.25 18.0549L7.4 19.0549C9.6 21.0049 10.7 22.0049 11.2 22.3049C11.45 22.4549 11.75 22.5549 12 22.5549C12.3 22.5549 12.55 22.4549 12.8 22.3049C13.3 22.0049 14.2 21.2049 16.7 18.9049L17.7 18.0049C18.05 17.7049 18.35 17.4049 18.7 17.1549C21.35 14.9549 24 12.6549 24 8.95493C24 4.95493 21 1.70493 17.3 1.70493Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                        <span class="sr-only">like {post
                                                            title}</span>
                                                    </button>
                                                </span>
                                                <!--/. Post content > actions > like post -->

                                                <!-- Post content > actions > comment to post -->
                                                <span class="inline-flex items-center text-sm">
                                                    <button
                                                        class="inline-flex space-x-2 text-gray-900 hover:text-gray-500"
                                                        type="button">
                                                        <svg class="h-4 w-4" aria-hidden="true"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <g clip-path="url(#clip0_134_1678)">
                                                                <path fill-rule="evenodd"
                                                                    clip-rule="evenodd"
                                                                    d="M23.75 23.2049L22.35 17.7049C23.25 16.0549 23.75 14.1549 23.75 12.1549C23.75 5.65494 18.5 0.404938 12 0.404938C5.5 0.404938 0.25 5.65494 0.25 12.1549C0.25 18.6549 5.5 23.9049 12 23.9049C14 23.9049 15.9 23.4049 17.55 22.5049L23.05 23.9049C23.45 24.0049 23.85 23.6049 23.75 23.2049ZM22.25 12.1549C22.25 14.1549 21.75 15.6549 20.95 17.1549C20.85 17.3549 20.8 17.6049 20.85 17.8549L21.9 22.0549L17.75 21.0049C17.5 20.9549 17.25 20.9549 17.05 21.1049C16.15 21.6049 14.45 22.4049 12.05 22.4049C6.35 22.4049 1.75 17.8049 1.75 12.1549C1.75 6.50494 6.35 1.90494 12 1.90494C17.65 1.90494 22.25 6.50494 22.25 12.1549Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_134_1678">
                                                                    <rect width="24"
                                                                        height="24"
                                                                        fill="white"
                                                                        transform="translate(0 0.154938)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span class="sr-only">comment to {post
                                                            title}</span>
                                                    </button>
                                                </span>
                                                <!--/. Post content > actions > comment to post -->

                                                <!-- Post content > actions > share post -->
                                                <span class="inline-flex items-center text-sm">
                                                    <button
                                                        class="inline-flex space-x-2 text-gray-900 hover:text-gray-500"
                                                        type="button">
                                                        <svg class="h-4 w-4" aria-hidden="true"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <g clip-path="url(#clip0_134_1681)">
                                                                <path
                                                                    d="M23.9 2.05494C23.75 1.80494 23.5 1.65494 23.25 1.65494H0.75C0.45 1.70494 0.15 1.90494 0.05 2.15494C-0.05 2.40494 0 2.75494 0.2 3.00494L8.15 10.8049L10.9 22.1049C10.95 22.4049 11.2 22.6049 11.5 22.6549H11.6C11.85 22.6549 12.1 22.5049 12.25 22.3049L23.85 2.80494C24.05 2.60494 24.05 2.30494 23.9 2.05494ZM2.6 3.20494H20.35L9 9.50494L2.6 3.20494ZM11.95 20.0049L9.75 10.8049L21.2 4.45494L11.95 20.0049Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_134_1681">
                                                                    <rect width="24"
                                                                        height="24"
                                                                        fill="white"
                                                                        transform="translate(0 0.154938)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span class="sr-only">share {post
                                                            title}</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <!--/. Post content > actions > share post -->

                                            <!-- Post content > actions > bookmark post -->
                                            <div class="flex text-sm">
                                                <span class="inline-flex items-center text-sm">
                                                    <button
                                                        class="inline-flex space-x-2 text-gray-400 hover:text-gray-500"
                                                        type="button">
                                                        <svg class="h-4 w-4" aria-hidden="true"
                                                            viewBox="0 0 24 24" fill="currentColor">
                                                            <g clip-path="url(#clip0_134_1685)">
                                                                <path
                                                                    d="M21.75 24.1549C21.55 24.1549 21.35 24.0549 21.2 23.9549L12 14.6549L2.8 23.9549C2.6 24.1549 2.25 24.2549 2 24.1049C1.7 24.0049 1.5 23.7049 1.5 23.4049V0.904938C1.5 0.504938 1.85 0.154938 2.25 0.154938H21.75C22.15 0.154938 22.5 0.504938 22.5 0.904938V23.4049C22.5 23.7049 22.3 24.0049 22.05 24.1049C21.95 24.1549 21.85 24.1549 21.75 24.1549ZM12 13.1549C12.4 13.1549 12.8 13.3049 13.1 13.6049L21 21.6049V1.65494H3V21.6049L10.9 13.6049C11.2 13.3049 11.6 13.1549 12 13.1549Z"
                                                                    fill="currentColor" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_134_1685">
                                                                    <rect width="24"
                                                                        height="24"
                                                                        fill="white"
                                                                        transform="translate(0 0.154938)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                        <span class="sr-only">bookmark {post
                                                            title}</span>
                                                    </button>
                                                </span>
                                            </div>
                                            <!--/. Post content > actions > bookmark post -->
                                        </div>
                                        <!--/. Post content > actions -->

                                        <div class="mt-2">
                                            <!-- Post content > likes -->
                                            <div>
                                                <p class="text-sm font-medium text-gray-800">
                                                    {{ rand(1, 10) . '  likes' }}
                                                </p>
                                            </div>

                                            <!-- Post content > caption -->
                                            <div>
                                                <p class="text-sm">
                                                    <strong
                                                        class="font-medium text-gray-800">{{ Str::random(12) }}</strong>

                                                    <span class="text-gray-700">
                                                        lorem ipsum dolor sit amet consectetur
                                                        adipisicing
                                                        elit. Quisquam, quod.
                                                    </span>
                                                </p>
                                            </div>

                                            <!-- Post content > view comments -->
                                            <div>
                                                <button class="text-sm font-medium text-gray-500"
                                                    type="button">
                                                    View all comments
                                                </button>
                                            </div>

                                            <!-- Post content > date -->
                                            <div>
                                                <p class="text-sm font-medium text-gray-500">
                                                    {{ now()->subHours(rand(1, 24))->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/. Post content -->

                                    <!-- Post > add comment -->
                                    <div class="border border-gray-300 py-2 px-3">
                                        <div class="space-between flex">
                                            <input class="h-8 w-full text-sm focus:outline-none"
                                                type="text" placeholder="Add a comment..." />

                                            <button
                                                class="text-sm font-semibold text-blue-500 hover:text-blue-900"
                                                type="button">
                                                Post
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!--/. Post listing -->
        </div>
        <!--/. Main section -->

        <!-- Sidebar section -->
        <div>
            <!-- Suggested to follow -->
            <nav class="ml-6 w-auto overflow-hidden">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-gray-400">Suggestions for you</p>

                    <a class="text-sm font-semibold text-gray-900 hover:text-gray-600"
                        href="#">
                        See all
                    </a>
                </div>

                <ul class="mt-3 flex flex-col space-y-2.5">
                    @foreach (range(1, 5) as $item)
                        <li>
                            <div class="flex flex-row items-center justify-between">
                                <a href="#" class="flex flex-row items-center">
                                    <div>
                                        <img class="h-10 w-10 rounded-full bg-white p-[3px]"
                                            src="{{ 'https://i.pravatar.cc/300?u=' . Str::random(8) }}"
                                            alt="">
                                    </div>

                                    <div class="ml-2 min-w-0 flex-1">
                                        <p class="text-sm font-medium text-gray-900">
                                            {{ Str::random(12) }}
                                        </p>

                                        <p class="text-xs font-medium text-gray-500">
                                            Followed by {{ Str::random(12) }} and
                                            {{ rand(1, 5) }}
                                            others
                                        </p>
                                    </div>
                                </a>

                                <div class="ml-4">
                                    <button
                                        class="text-sm font-semibold text-blue-500 hover:text-blue-900"
                                        type="button">
                                        Follow
                                    </button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <!--/. Suggested to follow -->
        </div>
        <!--/. Sidebar section -->
    </div>
</x-app-layout>
